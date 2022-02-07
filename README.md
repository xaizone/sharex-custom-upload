sharex-custom-upload
=====================
PHP-based ShareX Custom uploader, easy to setup and use.

## Prerequisites
- PHP Server (8.0+ recommended)

## Installation
### Server
1. Replace `CHANGEME` in `upload.php` with [something](https://passwordsgenerator.net/?length=24&symbols=0&numbers=1&lowercase=1&uppercase=1&similar=1&ambiguous=0&client=1&autoselect=0) secure
2. Upload `upload.php` to your website

### Client
1. Import `sharex.sxcu` to your local ShareX installation
2. Adjust `key` to match the one in `upload.php`
3. Change `example.com` to your website's domain

## Note
- If you're using Cloudflare make sure you check your plan's HTTP POST limit ([Cloudflare Docs](https://developers.cloudflare.com/cache/about/default-cache-behavior))
- Adjust `upload_max_filesize`, `post_max_size` values in your PHP installation 