/**
 * Figma APIを使用してデザインファイルから情報を取得するスクリプト
 *
 * 使用方法:
 * 1. .envファイルにFIGMA_TOKENを設定
 * 2. node src/scripts/figma-api.js
 */

require("dotenv").config();
const fs = require("fs");
const path = require("path");
const fetch = require("node-fetch");

// Figma File Key（URLから抽出）
// https://www.figma.com/design/I1xGHVPPmxmAD1pE4H2aSd/...
const FIGMA_FILE_KEY = "I1xGHVPPmxmAD1pE4H2aSd";
const FIGMA_API_BASE = "https://api.figma.com/v1";

/**
 * Figma APIを呼び出す
 */
async function fetchFigmaAPI(endpoint) {
  const token = process.env.FIGMA_TOKEN;

  if (!token) {
    throw new Error(
      "FIGMA_TOKENが設定されていません。.envファイルを確認してください。"
    );
  }

  const url = `${FIGMA_API_BASE}${endpoint}`;
  const response = await fetch(url, {
    headers: {
      "X-Figma-Token": token,
    },
  });

  if (!response.ok) {
    const error = await response.text();
    throw new Error(`Figma API Error: ${response.status} - ${error}`);
  }

  return await response.json();
}

/**
 * ファイル情報を取得
 */
async function getFile() {
  console.log("📄 Figmaファイル情報を取得中...");
  const data = await fetchFigmaAPI(`/files/${FIGMA_FILE_KEY}`);
  return data;
}

/**
 * 特定のノード情報を取得
 */
async function getNode(nodeId) {
  console.log(`🔍 ノード情報を取得中: ${nodeId}`);
  const data = await fetchFigmaAPI(
    `/files/${FIGMA_FILE_KEY}/nodes?ids=${nodeId}`
  );
  return data;
}

/**
 * スタイル情報を取得（色、テキストスタイルなど）
 */
async function getStyles() {
  console.log("🎨 スタイル情報を取得中...");
  const data = await fetchFigmaAPI(`/files/${FIGMA_FILE_KEY}/styles`);
  return data;
}

/**
 * 画像を取得
 */
async function getImages(nodeIds, format = "png", scale = 2) {
  console.log("🖼️  画像を取得中...");
  const ids = Array.isArray(nodeIds) ? nodeIds.join(",") : nodeIds;
  const data = await fetchFigmaAPI(
    `/images/${FIGMA_FILE_KEY}?ids=${ids}&format=${format}&scale=${scale}`
  );
  return data;
}

/**
 * カラー情報を抽出してSCSS変数として出力
 */
function extractColors(fileData) {
  const colors = {};

  function traverseNode(node) {
    if (!node) return;

    // 塗りつぶし（fills）から色を抽出
    if (node.fills && Array.isArray(node.fills)) {
      node.fills.forEach((fill) => {
        if (fill.type === "SOLID" && fill.color) {
          const r = Math.round(fill.color.r * 255);
          const g = Math.round(fill.color.g * 255);
          const b = Math.round(fill.color.b * 255);
          const a =
            fill.opacity !== undefined ? fill.opacity : fill.color.a || 1;
          const hex = `#${[r, g, b]
            .map((x) => x.toString(16).padStart(2, "0"))
            .join("")
            .toUpperCase()}`;

          // ノード名から色の名前を推測
          const name = node.name || "color";
          if (!colors[name]) {
            colors[name] = {
              hex,
              rgba: `rgba(${r}, ${g}, ${b}, ${a})`,
              rgb: `rgb(${r}, ${g}, ${b})`,
            };
          }
        }
      });
    }

    // 子ノードを再帰的に処理
    if (node.children) {
      node.children.forEach((child) => traverseNode(child));
    }
  }

  if (fileData.document) {
    traverseNode(fileData.document);
  }

  return colors;
}

/**
 * フォント情報を抽出
 */
function extractFonts(fileData) {
  const fonts = {};

  function traverseNode(node) {
    if (!node) return;

    if (node.style) {
      const fontFamily = node.style.fontFamily;
      const fontSize = node.style.fontSize;
      const fontWeight = node.style.fontWeight;
      const lineHeight = node.style.lineHeightPx;

      if (fontFamily) {
        const key = `${node.name || "text"}-${fontSize || "default"}`;
        if (!fonts[key]) {
          fonts[key] = {
            fontFamily,
            fontSize: fontSize ? `${fontSize}px` : null,
            fontWeight: fontWeight || "normal",
            lineHeight: lineHeight ? `${lineHeight}px` : null,
          };
        }
      }
    }

    if (node.children) {
      node.children.forEach((child) => traverseNode(child));
    }
  }

  if (fileData.document) {
    traverseNode(fileData.document);
  }

  return fonts;
}

/**
 * スペーシング情報を抽出
 */
function extractSpacing(fileData) {
  const spacing = [];

  function traverseNode(node) {
    if (!node) return;

    // padding, marginなどの情報を抽出
    if (
      node.paddingLeft ||
      node.paddingRight ||
      node.paddingTop ||
      node.paddingBottom
    ) {
      spacing.push({
        name: node.name,
        padding: {
          left: node.paddingLeft,
          right: node.paddingRight,
          top: node.paddingTop,
          bottom: node.paddingBottom,
        },
      });
    }

    if (node.children) {
      node.children.forEach((child) => traverseNode(child));
    }
  }

  if (fileData.document) {
    traverseNode(fileData.document);
  }

  return spacing;
}

/**
 * メイン処理
 */
async function main() {
  try {
    console.log("🚀 Figma API スクリプトを開始します...\n");

    // ファイル情報を取得
    const fileData = await getFile();
    console.log(`✅ ファイル名: ${fileData.name}\n`);

    // カラー情報を抽出
    console.log("📊 デザイントークンを抽出中...");
    const colors = extractColors(fileData);
    const fonts = extractFonts(fileData);
    const spacing = extractSpacing(fileData);

    // 結果をJSONファイルに保存
    const outputDir = path.resolve(__dirname, "../figma-data");
    if (!fs.existsSync(outputDir)) {
      fs.mkdirSync(outputDir, { recursive: true });
    }

    const output = {
      file: {
        name: fileData.name,
        lastModified: fileData.lastModified,
        version: fileData.version,
      },
      colors,
      fonts,
      spacing,
      raw: fileData, // 生データも保存
    };

    const outputPath = path.join(outputDir, "design-tokens.json");
    fs.writeFileSync(outputPath, JSON.stringify(output, null, 2));
    console.log(`\n✅ デザイントークンを保存しました: ${outputPath}`);

    // SCSS変数ファイルを生成
    generateSCSSVariables(colors, fonts, outputDir);

    // スタイル情報も取得
    try {
      const styles = await getStyles();
      const stylesPath = path.join(outputDir, "styles.json");
      fs.writeFileSync(stylesPath, JSON.stringify(styles, null, 2));
      console.log(`✅ スタイル情報を保存しました: ${stylesPath}`);
    } catch (error) {
      console.warn(`⚠️  スタイル情報の取得に失敗: ${error.message}`);
    }

    console.log("\n✨ 完了しました！");
  } catch (error) {
    console.error("❌ エラーが発生しました:", error.message);
    process.exit(1);
  }
}

/**
 * SCSS変数ファイルを生成
 */
function generateSCSSVariables(colors, fonts, outputDir) {
  let scss = `// Figmaから自動生成されたデザイントークン
// 生成日時: ${new Date().toISOString()}

/* -------------------------------------------------------------------
  Colors from Figma
------------------------------------------------------------------- */
`;

  Object.entries(colors).forEach(([name, color]) => {
    const varName = name.toLowerCase().replace(/\s+/g, "-");
    scss += `$color-${varName}: ${color.hex};\n`;
  });

  scss += `\n/* -------------------------------------------------------------------
  Fonts from Figma
------------------------------------------------------------------- */
`;

  Object.entries(fonts).forEach(([name, font]) => {
    const varName = name.toLowerCase().replace(/\s+/g, "-");
    scss += `// $font-${varName}: ${font.fontFamily};\n`;
    if (font.fontSize) {
      scss += `// $font-size-${varName}: ${font.fontSize};\n`;
    }
  });

  const scssPath = path.join(outputDir, "_figma-tokens.scss");
  fs.writeFileSync(scssPath, scss);
  console.log(`✅ SCSS変数ファイルを生成しました: ${scssPath}`);
}

// スクリプトが直接実行された場合
if (require.main === module) {
  main();
}

module.exports = {
  getFile,
  getNode,
  getStyles,
  getImages,
  extractColors,
  extractFonts,
  extractSpacing,
};
