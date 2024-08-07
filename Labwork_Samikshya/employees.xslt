<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>Employee List</title>
                <style type="text/css">
                    body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                    }
                    h1 {
                    color: #333;
                    }
                    .employee {
                    margin-bottom: 15px;
                    padding: 10px;
                    width:70%;
                    border: 1px solid #ccc;
                    background-color: #f9f9f9;
                    }
                    .employee b {
                    color: #555;
                    }
                </style>
            </head>
            <body>
                <h1>Employee List</h1>
                <xsl:for-each select="employees/employee">
                    <div class="employee">
                        <b>Name:</b>
                        <xsl:value-of select="name" />
                        <br />
                        <b>Address:</b>
                        <xsl:value-of select="address" />
                        <br />
                        <b>Phone:</b>
                        <xsl:value-of select="phone" />
                        <br />
                        <b>Designation:</b>
                        <xsl:value-of select="designation" />
                        <br />
                        <b>Salary:</b>
                        <xsl:value-of select="salary" />
                    </div>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>