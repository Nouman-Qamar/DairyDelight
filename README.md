# DairyDelight  Dairy Products Company Website

A 4-page company website for a dairy products brand  home, about, product catalog (with cart popup + order form), and contact. Modernized with a warm sage-green + honey color palette, refreshed typography, and several real bug fixes.

🔗 **Live Demo:** https://nouman-qamar.github.io/DairyDelight/purchase.html

## Pages
- **Home** (`index.html`) — hero with video modal, about teaser, pricing, testimonials, discounts banner
- **About** (`about.html`) — company story
- **Products** (`purchase.html`) — searchable product grid with a "Buy Now" order popup (posts to a form backend)
- **Contact** (`contact.html`) — contact details + form

## What Was Modernized
- 🎨 New warm sage-green + honey palette (replaced a generic corporate blue)
- ✍️ Added a serif display font (Fraunces) for headings, paired with Poppins body text
- 🖼️ Reorganized 25+ loose images and the hero video into `assets/images/` and `assets/video/`
- ✨ Added hover-lift animation to pricing cards
- 🎬 Replaced a raw "download the video" link with a proper in-page video modal

## Real Bugs Fixed
- `main.js` referenced a `#orderForm` element that didn't exist on **any** page — this silently crashed the script on every page load (broke "click outside to close popup"). Added a null-check guard.
- Five sections had `background-image: url(../image/...)` pointing at a folder that never existed; one of those files didn't exist anywhere in the repo at all. Fixed three to point at real images, replaced the two with no source image with palette-matched gradients.
- `about.html` was missing its `<body>` tag and its closing `</footer></body></html>` tags entirely.
- Duplicate stray closing tags in the navbar markup (invalid HTML).
- About/Contact/Products pages each had a different, simpler navbar than the homepage — standardized all 4 pages to the same navbar (incl. mobile hamburger menu).
- A logo `alt` attribute and on-page heading both said "Milcow" instead of "DairyDelight" — fixed.
- A real personal phone number and email were hardcoded across all 4 pages — replaced with placeholder demo contact info.
- One image was referenced as `log.png` when the actual file was `log.jpg`.

## Tech Stack
`HTML5` · `CSS3` · `Vanilla JavaScript` · Font Awesome · Swiper.js (testimonials carousel)

## Run It Locally
```bash
git clone https://github.com/Nouman-Qamar/DairyDelight.git
cd DairyDelight
python3 -m http.server 8000
```
