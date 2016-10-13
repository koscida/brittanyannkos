<?php

function print_array($arr, $name = null) {
	echo "<pre> $name: ".print_r($arr, true)."</pre>";
}

function print_and_die($arr, $name = null) {
	print_array($arr, $name);
	die();
}



$subreddit_filters_female = array(
	"female", "she", "\sher\s", "\shers\s",
	"woman", "women", "girl",
	"femini",
	"sister", "wife", "daughter", "\sson\s", "husband", "brother",);
$subreddit_filters_tech = array(
	"tech", "comput",
	"phone", "cell",
	"desktop", "laptop", "tower", "monitor",
	"\scs\s", "comp sci", "program", "code");
$subreddit_filters_both = array_merge($subreddit_filters_female, $subreddit_filters_tech);

$subreddits_v1 = array(
	array(	// 7 - 7
		"general",
		array(
			array("https://www.reddit.com/",				"frontpage"),
			array("https://www.reddit.com/r/all",			"all"),
			array("https://www.reddit.com/r/AskReddit",		"AskReddit"),
			array("https://www.reddit.com/r/funny",			"funny"),
			array("https://www.reddit.com/r/todayilearned",	"todayilearned"),
			array("https://www.reddit.com/r/pics", 			"pics"),
			array("https://www.reddit.com/r/bestof",		"bestof"),
		),
		$subreddit_filters_both,
	),
	array(	// 3 - 10
		"feminineCentric",
		array(
			array("https://www.reddit.com/r/MakeupAddiction",		"MakeupAddiction"),
			array("https://www.reddit.com/r/skincareaddiction",		"skincareaddiction"),
			array("https://www.reddit.com/r/femalefashionadvice",	"femalefashionadvice"),
		),
		$subreddit_filters_tech,
	),
	array(	// 4 - 14
		"technology",
		array(
			array("https://www.reddit.com/r/technology",			"technology"),
			array("https://www.reddit.com/r/programming",			"programming"),
			array("https://www.reddit.com/r/talesfromtechsupport",	"talesfromtechsupport"),
			array("https://www.reddit.com/r/learnprogramming",		"learnprogramming"),
		),
		$subreddit_filters_female,
	),
	array(	// 3 - 17
		"feminist",
		array(
			array("https://www.reddit.com/r/shitredditsays",	"shitredditsays"),
			array("https://www.reddit.com/r/feminism",			"feminism"),
			array("https://www.reddit.com/r/TwoXChromosomes",	"TwoXChromosomes"),
		),
		$subreddit_filters_tech,
	),
	array(	// 3 - 20
		"antiFeminist",
		array(
			array("https://www.reddit.com/r/TumblrInAction",	"TumblrInAction"),
			array("https://www.reddit.com/r/MensRights",		"MensRights"),
			array("https://www.reddit.com/r/TheRedPill",		"TheRedPill"),
		),
		$subreddit_filters_tech,
	)
);

$default = array(
	'AskReddit',
	'funny',
	'todayilearned',
	'pics',
	'science',
	'worldnews',
	'IAmA',
	'announcements',
	'videos',
	'gaming',
	'blog',
	'movies',
	'Music',
	'aww',
	'news',
	'gifs',
	'explainlikeimfive',
	'askscience',
	'EarthPorn',
	'books',
	'television',
	'LifeProTips',
	'mildlyinteresting',
	'DIY',
	'Showerthoughts',
	'space',
	'sports',
	'tifu',
	'Jokes',
	'InternetIsBeautiful',
	'food',
	'gadgets',
	'history',
	'photoshopbattles',
	'nottheonion',
	'dataisbeautiful',
	'Futurology',
	'Documentaries',
	'GetMotivated',
	'personalfinance',
	'listentothis',
	'philosophy',
	'UpliftingNews',
	'OldSchoolCool',
	'Art',
	'creepy',
	'nosleep',
	'WritingPrompts',
	'TwoXChromosomes',
);
$default_subreddits = array();
foreach($default as $sub) {
	$default_subreddits[] = array("https://www.reddit.com/r/".$sub, $sub);
}
//print_array($default_subreddits, "default_subreddits");


$popular = array(
	'/r/Fitness',
	'/r/technology',
	'/r/bestof',
	'/r/WTF',
	'/r/AdviceAnimals',
	'/r/politics',
	'/r/atheism',
	'/r/woahdude',
	'/r/europe',
	'/r/gonewild',
	'/r/leagueoflegends',
	'/r/trees',
	'/r/gameofthrones',
	'/r/pokemongo',
	'/r/interestingasfuck',
	'/r/reddit.com',
	'/r/4chan',
	'/r/BlackPeopleTwitter',
	'/r/Games',
	'/r/programming',
	'/r/Android',
	'/r/nsfw',
	'/r/sex',
	'/r/cringepics',
	'/r/pcmasterrace',
	'/r/reactiongifs',
	'/r/malefashionadvice',
	'/r/Overwatch',
	'/r/ImGoingToHellForThis',
	'/r/pokemon',
	'/r/RealGirls',
	'/r/Frugal',
	'/r/YouShouldKnow',
	'/r/NSFW_GIF',
	'/r/fffffffuuuuuuuuuuuu',
	'/r/relationships',
	'/r/Unexpected',
	'/r/HistoryPorn',
	'/r/oddlysatisfying',
	'/r/AskHistorians',
	'/r/nfl',
	'/r/lifehacks',
	'/r/soccer',
	'/r/StarWars',
	'/r/tattoos',
	'/r/comics',
	'/r/OutOfTheLoop',
	'/r/JusticePorn',
	'/r/Minecraft',
	'/r/FoodPorn',
	'/r/cringe',
	'/r/facepalm',
	'/r/nba',
	'/r/hiphopheads',
	'/r/me_irl',
	'/r/wheredidthesodago',
	'/r/GlobalOffensive',
	'/r/olympics',
	'/r/anime',
	'/r/buildapc',
	'/r/wallpapers',
	'/r/GameDeals',
	'/r/hearthstone',
	'/r/freebies',
	'/r/conspiracy',
	'/r/gentlemanboners',
	'/r/Cooking',
	'/r/apple',
	'/r/TrueReddit',
	'/r/cats',
	'/r/talesfromtechsupport',
	'/r/shittyaskscience',
	'/r/loseit',
	'/r/EatCheapAndHealthy',
	'/r/wow',
	'/r/NetflixBestOf',
	'/r/skyrim',
	'/r/RoomPorn',
	'/r/asoiaf',
	'/r/Fallout',
	'/r/humor',
	'/r/spaceporn',
	'/r/AbandonedPorn',
	'/r/baconreader',
	'/r/holdthemoan',
	'/r/FiftyFifty',
	'/r/nsfw_gifs',
	'/r/mildlyinfuriating',
	'/r/geek',
	'/r/TumblrInAction',
	'/r/MakeupAddiction',
	'/r/offbeat',
	'/r/PS4',
	'/r/photography',
	'/r/AnimalsBeingJerks',
	'/r/DotA2',
	'/r/Steam',
	'/r/CrappyDesign',
	'/r/firstworldanarchists',
	'/r/BustyPetite',
	'/r/thatHappened',
	'/r/Whatcouldgowrong',
	'/r/dadjokes',
	'/r/rickandmorty',
	'/r/shutupandtakemymoney',
	'/r/thewalkingdead',
	'/r/travel',
	'/r/nonononoyes',
	'/r/QuotesPorn',
	'/r/Amateur',
	'/r/MapPorn',
	'/r/circlejerk',
	'/r/AskMen',
	'/r/everymanshouldknow',
	'/r/LearnUselessTalents',
	'/r/DestinyTheGame',
	'/r/AskWomen',
	'/r/TalesFromRetail',
	'/r/learnprogramming',
	'/r/holdmybeer',
	'/r/youtubehaiku',
	'/r/RoastMe',
	'/r/hockey',
	'/r/guns',
	'/r/Drugs',
	'/r/DoesAnybodyElse',
	'/r/bodyweightfitness',
	'/r/Economics',
	'/r/harrypotter',
	'/r/Tinder',
	'/r/changemyview',
	'/r/scifi',
	'/r/quityourbullshit',
	'/r/doctorwho',
	'/r/cumsluts',
	'/r/pcgaming',
	'/r/xboxone',
	'/r/ass',
	'/r/youdontsurf',
	'/r/iamverysmart',
	'/r/DepthHub',
	'/r/SubredditDrama',
	'/r/PerfectTiming',
	'/r/BuyItForLife',
	'/r/Boobies',
	'/r/seduction',
	'/r/SkincareAddiction',
	'/r/pettyrevenge',
	'/r/canada',
	'/r/GifRecipes',
	'/r/trashy',
	'/r/linux',
	'/r/RocketLeague',
	'/r/SandersForPresident',
	'/r/psychology',
	'/r/Eyebleach',
	'/r/investing',
	'/r/whatisthisthing',
	'/r/cars',
	'/r/milf',
	'/r/breakingbad',
	'/r/AlienBlue',
	'/r/GirlsFinishingTheJob',
	'/r/fo4',
	'/r/frugalmalefashion',
	'/r/polandball',
	'/r/TheSilphRoad',
	'/r/smashbros',
	'/r/slowcooking',
	'/r/The_Donald',
	'/r/offmychest',
	'/r/business',
	'/r/reallifedoodles',
	'/r/MorbidReality',
	'/r/battlestations',
	'/r/OnOff',
	'/r/fullmoviesonyoutube',
	'/r/Entrepreneur',
	'/r/running',
	'/r/UnexpectedThugLife',
	'/r/KenM',
	'/r/keto',
	'/r/instant_regret',
	'/r/LegalTeens',
	'/r/Celebs',
	'/r/CrazyIdeas',
	'/r/outside',
	'/r/worldcup',
	'/r/TrollXChromosomes',
	'/r/rule34',
	'/r/AnimalsBeingBros',
	'/r/HighQualityGifs',
	'/r/standupshots',
	'/r/NoFap',
	'/r/itookapicture',
	'/r/minimalism',
	'/r/60fpsporn',
	'/r/MMA',
	'/r/Bitcoin',
	'/r/girlsinyogapants',
	'/r/PetiteGoneWild',
	'/r/MURICA',
	'/r/FanTheories',
	'/r/baseball',
	'/r/fantasyfootball',
	'/r/de_IAmA',
	'/r/Guitar',
	'/r/beer',
	'/r/progresspics',
	'/r/CFB',
	'/r/behindthegifs',
	'/r/Damnthatsinteresting',
	'/r/IWantToLearn',
	'/r/DeepIntoYouTube',
	'/r/starcraft',
	'/r/writing',
	'/r/gonewildcurvy',
	'/r/motorcycles',
	'/r/getdisciplined',
	'/r/comicbooks',
	'/r/LetsNotMeet',
	'/r/WatchItForThePlot',
	'/r/bicycling',
	'/r/ArtisanVideos',
	'/r/dirtysmall',
	'/r/Meditation',
	'/r/chemicalreactiongifs',
	'/r/tipofmytongue',
	'/r/gamedev',
	'/r/iphone',
	'/r/creepyPMs',
	'/r/entertainment',
	'/r/woodworking',
	'/r/oldpeoplefacebook',
	'/r/magicTCG',
	'/r/nsfwhardcore',
	'/r/MealPrepSunday',
	'/r/GrandTheftAutoV',
	'/r/AsiansGoneWild',
	'/r/Justrolledintotheshop',
	'/r/celebnsfw',
	'/r/recipes',
	'/r/Marvel',
	'/r/TheRedPill',
	'/r/netsec',
	'/r/UnresolvedMysteries',
	'/r/howto',
	'/r/homemadexxx',
	'/r/trippinthroughtime',
	'/r/tumblr',
	'/r/LadyBoners',
);
$popular_subreddits = array();
foreach($popular as $sub) {
	$sub = substr($sub, 3);
	$popular_subreddits[] = array("https://www.reddit.com/r/".$sub, $sub);
}
//print_array($default_subreddits, "default_subreddits");


$subreddits_massive = array(
	array(	// 50 - 50
		"default",
		$default_subreddits,
		$subreddit_filters_both,
	),
	array(	// 250 - 300
		"popular",
		$popular_subreddits,
		$subreddit_filters_both,
	),
	array(	// 4 - 304
		"other",
		array(
			array("https://www.reddit.com", 						"frontpage"),
			array("https://www.reddit.com/r/shitredditsays",		"shitredditsays"),
			array("https://www.reddit.com/r/feminism",				"feminism"),
			array("https://www.reddit.com/r/MensRights",			"MensRights"),
		),
		$subreddit_filters_both,
	)
);

//print_array($subreddits_massive, "subreddits_massive");
