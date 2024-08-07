<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>List of Students</title>
                <style type="text/css">
                    body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    }
                    h1 {
                    color: #333;
                    }
                    .student {
                    margin-bottom: 10px;
                    }
                    .student b {
                    color: #555;
                    }
                </style>
            </head>
            <body>
                <h1>List of Students</h1>
                <xsl:for-each select="students/student">
                    <div class="student">
                        <b>Name:</b> <xsl:value-of select="name" /> , <b>Address:</b> <xsl:value-of
                            select="address" /> , <b>Roll no:</b> <xsl:value-of select="rollno" />
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>