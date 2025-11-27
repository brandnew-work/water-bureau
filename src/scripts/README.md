# Figma API スクリプト

Figma APIを使用してデザインファイルから情報を取得するスクリプトです。

## セットアップ

### 1. Figma Personal Access Tokenの取得

1. Figmaにログイン
2. Settings > Account > Personal access tokens に移動
3. 「Generate new token」をクリック
4. トークン名を入力して生成
5. 生成されたトークンをコピー

### 2. 環境変数の設定

`src`ディレクトリに`.env`ファイルを作成し、以下のように設定してください：

```env
FIGMA_TOKEN=your_figma_token_here
```

**重要**: `.env`ファイルは`.gitignore`に含まれているため、Gitにコミットされません。

### 3. 必要なパッケージのインストール

```bash
cd src
npm install
```

## 使用方法

```bash
cd src
npm run figma
```

## 出力

スクリプトを実行すると、以下のファイルが`src/figma-data/`ディレクトリに生成されます：

- `design-tokens.json` - カラー、フォント、スペーシングなどのデザイントークン
- `styles.json` - Figmaのスタイル情報
- `_figma-tokens.scss` - SCSS変数として使用できる形式

## カスタマイズ

`figma-api.js`の`FIGMA_FILE_KEY`を変更することで、別のFigmaファイルから情報を取得できます。

File Keyは、FigmaのURLから取得できます：
```
https://www.figma.com/design/[FILE_KEY]/...
```

