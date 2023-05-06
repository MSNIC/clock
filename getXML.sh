wget https://www.data.jma.go.jp/developer/xml/feed/regular.xml
wget https://www.data.jma.go.jp/developer/xml/feed/extra.xml
wget https://www.data.jma.go.jp/developer/xml/feed/eqvol.xml

mv ./regular.xml /var/www/clock/data.xml
mv ./eqvol.xml /var/www/clock/em.xml