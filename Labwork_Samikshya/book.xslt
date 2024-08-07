<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>Library</title>
                <style type="text/css">
                    body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    }
                    h1 {
                    color: #333;
                    }
                    .book {
                    margin-bottom: 15px;
                    padding: 10px;
                    border: 1px solid #ccc;
                    background-color: #f9f9f9;
                    }
                    .book b {
                    color: #555;
                    }
                </style>
            </head>
            <body>
                <h1>Library</h1>
                <xsl:for-each select="library/book">
                    <div class="book">
                        <b>ISBN:</b>
                        <xsl:value-of select="@isbn" />
                        <br />
                        <b>Name:</b>
                        <xsl:value-of select="name/firstname" />
                        <xsl:value-of select="name/middlename" />
                        <xsl:value-of select="name/lastname" />
                        <br />
                        <b>Authors:</b>
                        <xsl:for-each select="authors/author">
                            <div style="margin-left: 20px;">
                                <xsl:value-of select="firstname" />
                                <xsl:value-of select="middlename" />
                                <xsl:value-of select="lastname" />
                            </div>
                        </xsl:for-each>
                        <b>Page Number:</b>
                        <xsl:value-of select="pageno" />
                        <br />
                        <b>Price:</b>
                        <xsl:value-of select="price" />
                        <br />
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>