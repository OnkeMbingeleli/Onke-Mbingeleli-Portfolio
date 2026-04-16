# Onke Portfolio (Static)

This project now runs as a pure static site with no Python, Node, or PHP required.

## Run Locally (Git Bash)

```bash
cd "/c/Users/Onke Mbingeleli/Downloads/LifeChoicesAcademy/WordPress Learning Journey/onke-portfolio"
explorer.exe index.html
```

This opens the portfolio directly in your default browser.

## Primary Entry Point

- `index.html` (main page)
- `style.css` (styles)
- `assets/` (images and static assets)

## Notes

- All active paths are static-safe relative paths.
- `index.html` is the only runtime entry page.
- Legacy WordPress/Node/EJS files are archived in `legacy/`.

## Optional Server Preview (Only If Needed Later)

If you ever run a local server from the parent directory, use:

- `http://127.0.0.1:8000/onke-portfolio/index.html`

If you run a local server from this project directory, use:

- `http://127.0.0.1:8000/index.html`
