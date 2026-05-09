# DREEMCORP — dreemcorp.com

Website source and version control for [DREEMCORP](https://dreemcorp.com) — a creative agency and media production house. Services include video editing, social media content, personal branding, and visual production.

## Stack
- HTML / CSS / JS frontend
- php backend

## Infrastructure
- Hosting: Namecheap Stellar Plus (cPanel)
- CDN & DNS: Cloudflare

## Local Sync
Files are pulled from the cPanel server using `scripts/cpanel-sync.sh` and committed manually.

## Structure
\`\`\`
dreemcorp.com/
├── public_html/          ← live site files (synced from server)
├── scripts/
│   └── cpanel-sync.sh
├── seo/
│   ├── htaccess
│   ├── robots.txt
│   ├── llms.txt
│   ├── meta.html
│   └── schema.json
└── README.md
\`\`\`

## Related
- George Dreemer: [georgedreemer.com](https://georgedreemer.com)
- X / Twitter: [x.com/444eta](https://x.com/444eta)
- GitHub: [github.com/ETA444](https://github.com/ETA444)
- CryptoPandemic: [cryptopandemic.com](https://cryptopandemic.com)
- DataSafari: [datasafari.dev](https://datasafari.dev)
