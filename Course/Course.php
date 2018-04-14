<?php

/**
 *------------------------------------------------------------------------------------------------------------
 * This Structured Data can Only be used for Course.
 * Don't copy the php tags "<?php" or "?>" these are only used to show the diffrence of Description in Comment 
 * and to highlight the html amd script tags in standard text editors 
 *------------------------------------------------------------------------------------------------------------
 */

/******************
 *FORMAT : JSON/LD
 *****************/

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/ ?>


<script type="application/ld+json">                                        
{
    "@context"  :   "http://schema.org",    [1]
    "@type"     :   "Course",               [2]
    "name"      :   "<NAME_OF_THE_COURSE>",                   (required)
    "url"       :   "<URL_OF_COURSE>",
    "image"     :   "<IMAGE_URL>",                            (required)
    "description":  "<DESCRIPTION_OF_COURSE>",
    "provider"  :{                                            (required)
        "@type" :   "<WHO_OFFERS_THE_COURSE>",
        "name"  :   "<NAME_OF_PROVIDER>",                     (required)
        "aggregateRating"   : {
            "@type": "AggregateRating",
            "ratingValue"   :   "<RATING_VALUE>",
            "bestRating"    :   "<MAX_RATING_VALUE (i.e. for 0 to 5 best is 5)>",
            "worstRating"   :   "<MIN_RATING_VALUE (i.e. for 0 to 5 worst is 0)>",
            "ratingCount"   :   "<NO_OF_RATINGS (i.e. how mant times rated)>",
            "reviewCount"   :   "<NO_OF_REVIEWS_GIVEN (i.e. reviews written by users )>"
        }
    }
}
</script>


<?php/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*******************
 *FORMAT : Microdata
 ******************/

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
?>

<div itemscope itemtype="http://schema.org/Course">
    <span itemprop="name">NAME_OF_THE_COURSE</span>
    <span itemprop="url">URL_OF_COURSE</span>
    <span itemprop="image">IMAGE_URL</span>
    <span itemprop="description">here goes the description</span>
    <div itemprop="provider" itemscope itemtype="http://schema.org/Organization">
        <span itemprop="name">Course_name</span>
        <span itemprop="url">provider url</span>
    </div>
    <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <meta name="bestRating" content="5">
        <meta name="worsttRating" content="0">
        <span itemprop="ratingValue">3.5</span>
        <span itemprop="ratingCount">4</span>
        <span itemprop="reviewCount">3</span>
    </div>
</div>

<?php
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/


/**
|---------------------------
| Description of the Above
|---------------------------
|
|   [1],[2] tells the search Engine that this the Structured Data of a Course. dont write "[1] and [2]" these are 
|   used only for Expanantion Purpose in here.
|
|(required) >> these are must to be present
|
|   ALL the required fields are must to include otherwise the testing tool will give error 
|   FOR @context , @type Please refer the Keywords.txt in the root directory(folder) where all these files are kept.
|   [Root/Parent folder of Product , Course etc].
|
|
|           
|-------------------------------------------------------------------------------------------------------------------
|
|NAME_OF_THE_COURSE      
|--------------------
|   It Simply tell aboput the name of the course just like any Subject i.e. Maths 
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|URL_OF_COURSE
|-------------
|   the url where this perticular course can be found.
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|IMAGE_URL
|---------
|   The url of thumbnail image that will be shown in result. 
|
|-------------------------------------------------------------------------------------------------------------------
|
|DESCRIPTION_OF_COURSE
|---------------------
|   this is the breif description of the Course. can be of a word line or a paragraph.
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|WHO_OFFERS_THE_COURSE
|---------------------
|   1 . Organization : If the Course is provided by an Organization ( i.e. Institute ) . 
|   2 . Person : If  a Single Person Provides the course
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|NAME_OF_PROVIDER
|----------------
|   Name of the Person or Oganization . ( i.e. Name of Institute ) .
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|RATING_VALUE
|------------
|   This tell the average rating of the all the ratings given. ( sum of all the user rating / no of user ratings  ). 
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|MIN_RATING_VALUE
|----------------
|   this is the minimum value theb user can give to rate the course.
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|MAX_RATING_VALUE
|----------------
|   this is the maximum value theb user can give to rate the course.
|
|-------------------------------------------------------------------------------------------------------------------
|-------------------------------------------------------------------------------------------------------------------
|
|NO_OF_RATINGS
|-------------
|   how many times the course is being rated. (no of user ratings).
|
|-------------------------------------------------------------------------------------------------------------------
*/





/*************
 * EXAMPLES
 ************/
