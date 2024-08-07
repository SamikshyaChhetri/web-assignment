<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text" encoding="UTF-8" />

    <xsl:template match="/Students">
        <xsl:text>List of students&#10;</xsl:text>
        <xsl:apply-templates select="Student" />
    </xsl:template>

    <xsl:template match="Student">
        <xsl:text>Name: </xsl:text>
        <xsl:value-of select="Name" />
        <xsl:text>, Address: </xsl:text>
        <xsl:value-of select="Address" />
        <xsl:text>, Roll no: </xsl:text>
        <xsl:value-of select="RollNo" />
        <xsl:text>&#10;</xsl:text>
    </xsl:template>
</xsl:stylesheet>