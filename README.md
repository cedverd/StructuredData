# StructuredData

this Project is made to help in implementing the structured data.


just copy the code andpaste where you want

Edit Only the parts like ```XXXX_XX_XX ``` to put the value

For Microdata format
copy the code between But don't copy the php tags
```
<div itemscope itemtype="http://schema.org/Course">
    <span itemprop="name">NAME_OF_THE_COURSE</span>
    <span itemprop="url">URL_OF_COURSE</span>
    <span itemprop="image">IMAGE_URL</span>
</div>
```

FOR JSON/LD Format like this copy the whole script
```
<script type="application/ld+json">                                        
{
    "@context"  :   "http://schema.org",
    "@type"     :   "xxxxxx",               
    "xxxxx"     :   "xxxxxx"
}
</script>
```
##You can give the value in php variable
### MICRODATA
```
"<span itemprop="xxxxxx"> <?php $value ?></span>"
```
###JSON/LD
```
"xxxxx" : "<?php $value ?>"
```
