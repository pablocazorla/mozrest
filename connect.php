<?php
/*
Template Name: connect
*/
?>
<?php get_header(); ?>
Connect
<?php $matchingString = get_query_var('matching');

$matchingArray = explode('--', $matchingString);

$rms_slug = $matchingArray[0];
$rp_slug = $matchingArray[1];

echo '<h1>' . $rms_slug . '</h1>'; // porción1
echo '<h1>' . $rp_slug . '</h1>'; // porción2

?>

<?php get_footer(); ?>