<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <link rel="stylesheet" type="text/css" href="style.css" />
            </head>
            <body>
                <xsl:for-each select="contacts/contact">
                    <div>
                        <span class="{name/@class}">
                            <xsl:value-of select="name" />
                        </span>
                        <address>
                            <xsl:value-of select="address" />
                        </address>
                        <city>
                            <xsl:value-of select="city" />
                        </city>
                        <email>
                            <xsl:value-of select="email" />
                        </email>
                        <phone>
                            <xsl:value-of select="phone" />
                        </phone>
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>