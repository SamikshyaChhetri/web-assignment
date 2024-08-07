<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Music Collection</title>
                <style type="text/css">
                    body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    }
                    h1 {
                    color: #333;
                    }
                    .song {
                    margin-bottom: 15px;
                    padding: 10px;
                    border: 1px solid #ccc;
                    background-color: #f9f9f9;
                    width:70%

                    }
                    .song b {
                    color: #555;
                    }
                </style>
            </head>
            <body>
                <h1>Music Collection</h1>
                <xsl:for-each select="MusicCollection/Song">
                    <div class="song">
                        <b>Name:</b>
                        <xsl:value-of select="Name" />
                        <br />
                        <b>Singer:</b>
                        <xsl:value-of select="Singer" />
                        <br />
                        <b>Composer:</b>
                        <xsl:value-of select="Composer" />
                        <br />
                        <b>Length:</b>
                        <xsl:value-of select="Length" />
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>