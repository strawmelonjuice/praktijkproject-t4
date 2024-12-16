bun run css:build

echo "Root access needed to open HTTP port 80."

sudo php -S dierentehuisdenbosch-project.nl:80 -t ./root/
