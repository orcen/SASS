$xs: 0;
$sm: 37.5em;
$md: 50em;
$l: 64em;
$xl: 80em;

/* Containers
----------------------------------------------------------------------------------------------------*/
.container_12 {
	width: 100%;
	margin-left: 0%;
	margin-right: 0%;
}

/* Grid >> Global
----------------------------------------------------------------------------------------------------*/

.grid_1,
.grid_2,
.grid_3,
.grid_4,
.grid_5,
.grid_6,
.grid_7,
.grid_8,
.grid_9,
.grid_10,
.grid_11,
.grid_12,
.grid_xl_1,
.grid_xl_2,
.grid_xl_3,
.grid_xl_4,
.grid_xl_5,
.grid_xl_6,
.grid_xl_7,
.grid_xl_8,
.grid_xl_9,
.grid_xl_10,
.grid_xl_11,
.grid_xl_12,
.grid_md_1,
.grid_md_2,
.grid_md_3,
.grid_md_4,
.grid_md_5,
.grid_md_6,
.grid_md_7,
.grid_md_8,
.grid_md_9,
.grid_md_10,
.grid_md_11,
.grid_md_12,
.grid_sm_1,
.grid_sm_2,
.grid_sm_3,
.grid_sm_4,
.grid_sm_5,
.grid_sm_6,
.grid_sm_7,
.grid_sm_8,
.grid_sm_9,
.grid_sm_10,
.grid_sm_11,
.grid_sm_12{
    display:inline;
	float: left;
	position: relative;
	padding-left: $base-font-size * 2;
	padding-right: $base-font-size * 2;
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
		    box-sizing: border-box;
}

/* Grid >> Children (Alpha ~ First, Omega ~ Last)
----------------------------------------------------------------------------------------------------*/

.alpha {
	padding-left: 0;
}

.omega {
	padding-right: 0;
}

.row {
    margin-left: -1em;
    margin-right: -1em;
}


.container_12 .grid_sm_1 {width:8.333%;}
.container_12 .grid_sm_2 {width:16.667%;}
.container_12 .grid_sm_3 {width:25.0%;}
.container_12 .grid_sm_4 {width:33.333%;}
.container_12 .grid_sm_5 {width:41.667%;}
.container_12 .grid_sm_6 {width:50.0%;}
.container_12 .grid_sm_7 {width:58.333%;}
.container_12 .grid_sm_8 {width:66.667%;}
.container_12 .grid_sm_9 {width:75.0%;}
.container_12 .grid_sm_10 {width:83.333%;}
.container_12 .grid_sm_11 {width:91.667%;}
.container_12 .grid_sm_12 {width:100.0%;}

.alpha_sm {margin-left: 0;}
.omega_sm {margin-right: 0;}

/* Prefix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/
.container_12 .prefix_sm_1 {padding-left:8.333%;}
.container_12 .prefix_sm_2 {padding-left:16.667%;}
.container_12 .prefix_sm_3 {padding-left:25.0%;}
.container_12 .prefix_sm_4 {padding-left:33.333%;}
.container_12 .prefix_sm_5 {padding-left:41.667%;}
.container_12 .prefix_sm_6 {padding-left:50.0%;}
.container_12 .prefix_sm_7 {padding-left:58.333%;}
.container_12 .prefix_sm_8 {padding-left:66.667%;}
.container_12 .prefix_sm_9 {padding-left:75.0%;}
.container_12 .prefix_sm_10 {padding-left:83.333%;}
.container_12 .prefix_sm_11 {padding-left:91.667%;}
/* Suffix Extra Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/
.container_12 .suffix_sm_1 {padding-right:8.333%;}
.container_12 .suffix_sm_2 {padding-right:16.667%;}
.container_12 .suffix_sm_3 {padding-right:25.0%;}
.container_12 .suffix_sm_4 {padding-right:33.333%;}
.container_12 .suffix_sm_5 {padding-right:41.667%;}
.container_12 .suffix_sm_6 {padding-right:50.0%;}
.container_12 .suffix_sm_7 {padding-right:58.333%;}
.container_12 .suffix_sm_8 {padding-right:66.667%;}
.container_12 .suffix_sm_9 {padding-right:75.0%;}
.container_12 .suffix_sm_10 {padding-right:83.333%;}
.container_12 .suffix_sm_11 {padding-right:91.667%;}
/* Push Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/
.container_12 .push_sm_0 {left:auto;}
.container_12 .push_sm_1 {left:8.333%;}
.container_12 .push_sm_2 {left:16.667%;}
.container_12 .push_sm_3 {left:25.0%;}
.container_12 .push_sm_4 {left:33.333%;}
.container_12 .push_sm_5 {left:41.667%;}
.container_12 .push_sm_6 {left:50.0%;}
.container_12 .push_sm_7 {left:58.333%;}
.container_12 .push_sm_8 {left:66.667%;}
.container_12 .push_sm_9 {left:75.0%;}
.container_12 .push_sm_10 {left:83.333%;}
.container_12 .push_sm_11 {left:91.667%;}
/* Pull Space >> 12 Columns
----------------------------------------------------------------------------------------------------*/
.container_12 .pull_sm_0 {left: auto;}
.container_12 .pull_sm_1 {left:-8.333%;}
.container_12 .pull_sm_2 {left:-16.667%;}
.container_12 .pull_sm_3 {left:-25.0%;}
.container_12 .pull_sm_4 {left:-33.333%;}
.container_12 .pull_sm_5 {left:-41.667%;}
.container_12 .pull_sm_6 {left:-50.0%;}
.container_12 .pull_sm_7 {left:-58.333%;}
.container_12 .pull_sm_8 {left:-66.667%;}
.container_12 .pull_sm_9 {left:-75.0%;}
.container_12 .pull_sm_10 {left:-83.333%;}
.container_12 .pull_sm_11 {left:-91.667%;}


@media screen and (min-width: $tablet) {

    .container_12 .grid_md_1 {width:8.333%;}
    .container_12 .grid_md_2 {width:16.667%;}
    .container_12 .grid_md_3 {width:25.0%;}
    .container_12 .grid_md_4 {width:33.333%;}
    .container_12 .grid_md_5 {width:41.667%;}
    .container_12 .grid_md_6 {width:50.0%;}
    .container_12 .grid_md_7 {width:58.333%;}
    .container_12 .grid_md_8 {width:66.667%;}
    .container_12 .grid_md_9 {width:75.0%;}
    .container_12 .grid_md_10 {width:83.333%;}
    .container_12 .grid_md_11 {width:91.667%;}
    .container_12 .grid_md_12 {width:100.0%;}

    /* Prefix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .prefix_md_0 {padding-left: 1em;}
    .container_12 .prefix_md_1 {padding-left:8.333%;}
    .container_12 .prefix_md_2 {padding-left:16.667%;}
    .container_12 .prefix_md_3 {padding-left:25.0%;}
    .container_12 .prefix_md_4 {padding-left:33.333%;}
    .container_12 .prefix_md_5 {padding-left:41.667%;}
    .container_12 .prefix_md_6 {padding-left:50.0%;}
    .container_12 .prefix_md_7 {padding-left:58.333%;}
    .container_12 .prefix_md_8 {padding-left:66.667%;}
    .container_12 .prefix_md_9 {padding-left:75.0%;}
    .container_12 .prefix_md_10 {padding-left:83.333%;}
    .container_12 .prefix_md_11 {padding-left:91.667%;}
    /* Suffix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .suffix_md_1 {padding-right:8.333%;}
    .container_12 .suffix_md_2 {padding-right:16.667%;}
    .container_12 .suffix_md_3 {padding-right:25.0%;}
    .container_12 .suffix_md_4 {padding-right:33.333%;}
    .container_12 .suffix_md_5 {padding-right:41.667%;}
    .container_12 .suffix_md_6 {padding-right:50.0%;}
    .container_12 .suffix_md_7 {padding-right:58.333%;}
    .container_12 .suffix_md_8 {padding-right:66.667%;}
    .container_12 .suffix_md_9 {padding-right:75.0%;}
    .container_12 .suffix_md_10 {padding-right:83.333%;}
    .container_12 .suffix_md_11 {padding-right:91.667%;}
    /* Push Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .push_md_1 {left:0;}
    .container_12 .push_md_1 {left:8.333%;}
    .container_12 .push_md_2 {left:16.667%;}
    .container_12 .push_md_3 {left:25.0%;}
    .container_12 .push_md_4 {left:33.333%;}
    .container_12 .push_md_5 {left:41.667%;}
    .container_12 .push_md_6 {left:50.0%;}
    .container_12 .push_md_7 {left:58.333%;}
    .container_12 .push_md_8 {left:66.667%;}
    .container_12 .push_md_9 {left:75.0%;}
    .container_12 .push_md_10 {left:83.333%;}
    .container_12 .push_md_11 {left:91.667%;}
    /* Pull Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .pull_md_0 {left: auto;}
    .container_12 .pull_md_1 {left:-8.333%;}
    .container_12 .pull_md_2 {left:-16.667%;}
    .container_12 .pull_md_3 {left:-25.0%;}
    .container_12 .pull_md_4 {left:-33.333%;}
    .container_12 .pull_md_5 {left:-41.667%;}
    .container_12 .pull_md_6 {left:-50.0%;}
    .container_12 .pull_md_7 {left:-58.333%;}
    .container_12 .pull_md_8 {left:-66.667%;}
    .container_12 .pull_md_9 {left:-75.0%;}
    .container_12 .pull_md_10 {left:-83.333%;}
    .container_12 .pull_md_11 {left:-91.667%;}

}




@media screen and (min-width: $desktop) {
    .container_12 .grid_1 {width:8.333%;}
    .container_12 .grid_2 {width:16.667%;}
    .container_12 .grid_3 {width:25.0%;}
    .container_12 .grid_4 {width:33.333%;}
    .container_12 .grid_5 {width:41.667%;}
    .container_12 .grid_6 {width:50.0%;}
    .container_12 .grid_7 {width:58.333%;}
    .container_12 .grid_8 {width:66.667%;}
    .container_12 .grid_9 {width:75.0%;}
    .container_12 .grid_10 {width:83.333%;}
    .container_12 .grid_11 {width:91.667%;}
    .container_12 .grid_12 {width:100.0%;}

        /* Prefix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .prefix_0 {padding-left: 1em;}
    .container_12 .prefix_1 {padding-left:8.333%;}
    .container_12 .prefix_2 {padding-left:16.667%;}
    .container_12 .prefix_3 {padding-left:25.0%;}
    .container_12 .prefix_4 {padding-left:33.333%;}
    .container_12 .prefix_5 {padding-left:41.667%;}
    .container_12 .prefix_6 {padding-left:50.0%;}
    .container_12 .prefix_7 {padding-left:58.333%;}
    .container_12 .prefix_8 {padding-left:66.667%;}
    .container_12 .prefix_9 {padding-left:75.0%;}
    .container_12 .prefix_10 {padding-left:83.333%;}
    .container_12 .prefix_11 {padding-left:91.667%;}
    /* Suffix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .suffix_1 {padding-right:8.333%;}
    .container_12 .suffix_2 {padding-right:16.667%;}
    .container_12 .suffix_3 {padding-right:25.0%;}
    .container_12 .suffix_4 {padding-right:33.333%;}
    .container_12 .suffix_5 {padding-right:41.667%;}
    .container_12 .suffix_6 {padding-right:50.0%;}
    .container_12 .suffix_7 {padding-right:58.333%;}
    .container_12 .suffix_8 {padding-right:66.667%;}
    .container_12 .suffix_9 {padding-right:75.0%;}
    .container_12 .suffix_10 {padding-right:83.333%;}
    .container_12 .suffix_11 {padding-right:91.667%;}
    /* Push Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .push_0 {left:auto;}
    .container_12 .push_1 {left:8.333%;}
    .container_12 .push_2 {left:16.667%;}
    .container_12 .push_3 {left:25.0%;}
    .container_12 .push_4 {left:33.333%;}
    .container_12 .push_5 {left:41.667%;}
    .container_12 .push_6 {left:50.0%;}
    .container_12 .push_7 {left:58.333%;}
    .container_12 .push_8 {left:66.667%;}
    .container_12 .push_9 {left:75.0%;}
    .container_12 .push_10 {left:83.333%;}
    .container_12 .push_11 {left:91.667%;}
    /* Pull Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .pull_0 {left:auto;}
    .container_12 .pull_1 {left:-8.333%;}
    .container_12 .pull_2 {left:-16.667%;}
    .container_12 .pull_3 {left:-25.0%;}
    .container_12 .pull_4 {left:-33.333%;}
    .container_12 .pull_5 {left:-41.667%;}
    .container_12 .pull_6 {left:-50.0%;}
    .container_12 .pull_7 {left:-58.333%;}
    .container_12 .pull_8 {left:-66.667%;}
    .container_12 .pull_9 {left:-75.0%;}
    .container_12 .pull_10 {left:-83.333%;}
    .container_12 .pull_11 {left:-91.667%;}

}


/* Grid >> 12 Columns
----------------------------------------------------------------------------------------------------*/
@media screen and (min-width: $xl) {
    .container_12 .grid_xl_1 {width:8.333%;}
    .container_12 .grid_xl_2 {width:16.667%;}
    .container_12 .grid_xl_3 {width:25.0%;}
    .container_12 .grid_xl_4 {width:33.333%;}
    .container_12 .grid_xl_5 {width:41.667%;}
    .container_12 .grid_xl_6 {width:50.0%;}
    .container_12 .grid_xl_7 {width:58.333%;}
    .container_12 .grid_xl_8 {width:66.667%;}
    .container_12 .grid_xl_9 {width:75.0%;}
    .container_12 .grid_xl_10 {width:83.333%;}
    .container_12 .grid_xl_11 {width:91.667%;}
    .container_12 .grid_xl_12 {width:100.0%;}

        /* Prefix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .prefix_xl_0 {padding-left: 1em;}
    .container_12 .prefix_xl_1 {padding-left:8.333%;}
    .container_12 .prefix_xl_2 {padding-left:16.667%;}
    .container_12 .prefix_xl_3 {padding-left:25.0%;}
    .container_12 .prefix_xl_4 {padding-left:33.333%;}
    .container_12 .prefix_xl_5 {padding-left:41.667%;}
    .container_12 .prefix_xl_6 {padding-left:50.0%;}
    .container_12 .prefix_xl_7 {padding-left:58.333%;}
    .container_12 .prefix_xl_8 {padding-left:66.667%;}
    .container_12 .prefix_xl_9 {padding-left:75.0%;}
    .container_12 .prefix_xl_10 {padding-left:83.333%;}
    .container_12 .prefix_xl_11 {padding-left:91.667%;}
    /* Suffix Extra Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .suffix_xl_1 {padding-right:8.333%;}
    .container_12 .suffix_xl_2 {padding-right:16.667%;}
    .container_12 .suffix_xl_3 {padding-right:25.0%;}
    .container_12 .suffix_xl_4 {padding-right:33.333%;}
    .container_12 .suffix_xl_5 {padding-right:41.667%;}
    .container_12 .suffix_xl_6 {padding-right:50.0%;}
    .container_12 .suffix_xl_7 {padding-right:58.333%;}
    .container_12 .suffix_xl_8 {padding-right:66.667%;}
    .container_12 .suffix_xl_9 {padding-right:75.0%;}
    .container_12 .suffix_xl_10 {padding-right:83.333%;}
    .container_12 .suffix_xl_11 {padding-right:91.667%;}
    /* Push Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .push_xl_0 {left: auto;}
    .container_12 .push_xl_1 {left:8.333%;}
    .container_12 .push_xl_2 {left:16.667%;}
    .container_12 .push_xl_3 {left:25.0%;}
    .container_12 .push_xl_4 {left:33.333%;}
    .container_12 .push_xl_5 {left:41.667%;}
    .container_12 .push_xl_6 {left:50.0%;}
    .container_12 .push_xl_7 {left:58.333%;}
    .container_12 .push_xl_8 {left:66.667%;}
    .container_12 .push_xl_9 {left:75.0%;}
    .container_12 .push_xl_10 {left:83.333%;}
    .container_12 .push_xl_11 {left:91.667%;}
    /* Pull Space >> 12 Columns
    ----------------------------------------------------------------------------------------------------*/
    .container_12 .pull_xl_0 {left:auto;}
    .container_12 .pull_xl_1 {left:-8.333%;}
    .container_12 .pull_xl_2 {left:-16.667%;}
    .container_12 .pull_xl_3 {left:-25.0%;}
    .container_12 .pull_xl_4 {left:-33.333%;}
    .container_12 .pull_xl_5 {left:-41.667%;}
    .container_12 .pull_xl_6 {left:-50.0%;}
    .container_12 .pull_xl_7 {left:-58.333%;}
    .container_12 .pull_xl_8 {left:-66.667%;}
    .container_12 .pull_xl_9 {left:-75.0%;}
    .container_12 .pull_xl_10 {left:-83.333%;}
    .container_12 .pull_xl_11 {left:-91.667%;}

}




.clear{
    overflow: hidden;
    width: 50%;
    clear: both;
    visibility: hidden;
    @include margin( $base-line-height, auto);
}

.clearfix::after,
.row::after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}

.clearfix {
}

html[xmlns] .clearfix {
	display: block;
}

* html .clearfix {
	height: 1%;
}