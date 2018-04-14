# StructuredData

this Project is made to help in implementing the structured data.


just copy the code andpaste where you wannt

FOR MICRODATA FORMAT
copy the code between But don't copy the php tags

FOR JSON/LD FORMAT like thjs

<script type="application/ld+json">                                        
{
    "@context"  :   "http://schema.org",
    "@type"     :   "xxxxxx",               
    "xxxxx"     :   "xxxxxx"
}
</script>

you can give the value in php variable
for MICRODATA
<span itemprop="xxxxxx"> <?php $value ?></span>

for JSON/LD
"xxxxx" : "<?php $value ?>"
