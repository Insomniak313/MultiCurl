#!/usr/bin/php
<?php

##############################################################
#                     MULTICURL V0.1                         #
#                   Made with love by Inso                   #
#                                                            #
# Special gr33ts to InURL BR, this not a copy of your great  #
# work, this tool is much intendeed to be used with          #
# pipelining                                                 #
##############################################################

##############################################################
#                            API                             #
##############################################################
class Api
{
	public $verbose = false;

	public function displayHeader()
	{
		$this->display(" _______           _    __________________ _______           _______  _       \n(       )|\     /|( \   \__   __/\__   __/(  ____ \|\     /|(  ____ )( \      \n| () () || )   ( || (      ) (      ) (   | (    \/| )   ( || (    )|| (      \n| || || || |   | || |      | |      | |   | |      | |   | || (____)|| |      \n| |(_)| || |   | || |      | |      | |   | |      | |   | ||     __)| |      \n| |   | || |   | || |      | |      | |   | |      | |   | || (\ (   | |      \n| )   ( || (___) || (____/\| |   ___) (___| (____/\| (___) || ) \ \__| (____/\n|/     \|(_______)(_______/)_(   \_______/(_______/(_______)|/   \__/(_______/\n");
	}

	public function displayQuote()
	{
		$this->display('"' . Random::quoteRandom() . "\"\n");
	}

	public function display($text, $text_to_display_anyway = '')
	{
		if($this->verbose)
		{
			echo $text, "\n";
			return;
		}
		if($text_to_display_anyway != '')
		{
			echo $text_to_display_anyway, "\n";
		}
	}

	public function displayTestimonial()
	{
		$this->display('[+] Multicurl v0.1');
		$this->display('[+] Made with love by ins0');
		$this->display('[+] Last release april 2016');
	}
}
##############################################################
#                           CONFIG                           #
##############################################################
abstract class Config
{
	public static function getAgentBrowser()
	{
		return array('Firefox', 'Safari', 'Opera', 'Flock', 'Internet Explorer', 'Seamonkey', 'Tor Browser', 'GNU IceCat', 'CriOS', 'TenFourFox',
			'SeaMonkey', 'B-l-i-t-z-B-O-T', 'Konqueror', 'Mobile', 'Konqueror', 'Netscape', 'Chrome', 'Dragon', 'SeaMonkey', 'Maxthon', 'IBrowse',
			'K-Meleon', 'GoogleBot', 'Konqueror', 'Minimo', 'Googlebot', 'WeltweitimnetzBrowser', 'SuperBot', 'TerrawizBot', 'YodaoBot', 'Wyzo', 'Grail',
			'PycURL', 'Galaxy', 'EnigmaFox', '008', 'ABACHOBot', 'Bimbot', 'Covario IDS', 'iCab', 'KKman', 'Oregano', 'WorldWideWeb', 'Wyzo', 'GNU IceCat',
			'Vimprobable', 'uzbl', 'Slim Browser', 'Flock', 'OmniWeb', 'Rockmelt', 'Shiira', 'Swift', 'Pale Moon', 'Camino', 'Flock', 'Galeon', 'Sylera'
		);
	}

	public static function getAgentSystem()
	{
		return array('Windows 3.1', 'Windows 95', 'Windows 98', 'Windows 2000', 'Windows NT', 'Linux 2.4.22-10mdk', 'FreeBSD',
			'Windows XP', 'Windows Vista', 'Redhat Linux', 'Ubuntu', 'Fedora', 'AmigaOS', 'BackTrack Linux', 'iPad', 'BlackBerry', 'Unix',
			'CentOS Linux', 'Debian Linux', 'Macintosh', 'Android', 'iPhone', 'Windows NT 6.1', 'BeOS', 'OS 10.5', 'Nokia', 'Arch Linux',
			'Ark Linux', 'BitLinux', 'Conectiva (Mandriva)', 'CRUX Linux', 'Damn Small Linux', 'DeLi Linux', 'Ubuntu', 'BigLinux', 'Edubuntu',
			'Fluxbuntu', 'Freespire', 'GNewSense', 'Gobuntu', 'gOS', 'Mint Linux', 'Kubuntu', 'Xubuntu', 'ZeVenOS', 'Zebuntu', 'DemoLinux',
			'Dreamlinux', 'DualOS', 'eLearnix', 'Feather Linux', 'Famelix', 'FeniX', 'Gentoo', 'GoboLinux', 'GNUstep', 'Insigne Linux',
			'Kalango', 'KateOS', 'Knoppix', 'Kurumin', 'Dizinha', 'TupiServer', 'Linspire', 'Litrix', 'Mandrake', 'Mandriva', 'MEPIS',
			'Musix GNU Linux', 'Musix-BR', 'OneBase Go', 'openSuSE', 'pQui Linux', 'PCLinuxOS', 'Plaszma OS', 'Puppy Linux', 'QiLinux',
			'Red Hat Linux', 'Red Hat Enterprise Linux', 'CentOS', 'Fedora', 'Resulinux', 'Rxart', 'Sabayon Linux', 'SAM Desktop', 'Satux',
			'Slackware', 'GoblinX', 'Slax', 'Zenwalk', 'SuSE', 'Caixa Mágica', 'HP-UX', 'IRIX', 'OSF/1', 'OS-9', 'POSYS', 'QNX', 'Solaris',
			'OpenSolaris', 'SunOS', 'SCO UNIX', 'Tropix', 'EROS', 'Tru64', 'Digital UNIX', 'Ultrix', 'UniCOS', 'UNIflex', 'Microsoft Xenix',
			'z/OS', 'Xinu', 'Research Unix', 'InfernoOS'
		);
	}

	public static function getAgentLocals()
	{
		return array('cs-CZ', 'en-US', 'sk-SK', 'pt-BR', 'sq_AL', 'sq', 'ar_DZ', 'ar_BH', 'ar_EG', 'ar_IQ', 'ar_JO',
			'ar_KW', 'ar_LB', 'ar_LY', 'ar_MA', 'ar_OM', 'ar_QA', 'ar_SA', 'ar_SD', 'ar_SY', 'ar_TN', 'ar_AE', 'ar_YE', 'ar',
			'be_BY', 'be', 'bg_BG', 'bg', 'ca_ES', 'ca', 'zh_CN', 'zh_HK', 'zh_SG', 'zh_TW', 'zh', 'hr_HR', 'hr', 'cs_CZ', 'cs',
			'da_DK', 'da', 'nl_BE', 'nl_NL', 'nl', 'en_AU', 'en_CA', 'en_IN', 'en_IE', 'en_MT', 'en_NZ', 'en_PH', 'en_SG', 'en_ZA',
			'en_GB', 'en_US', 'en', 'et_EE', 'et', 'fi_FI', 'fi', 'fr_BE', 'fr_CA', 'fr_FR', 'fr_LU', 'fr_CH', 'fr', 'de_AT', 'de_DE',
			'de_LU', 'de_CH', 'de', 'el_CY', 'el_GR', 'el', 'iw_IL', 'iw', 'hi_IN', 'hu_HU', 'hu', 'is_IS', 'is', 'in_ID', 'in', 'ga_IE',
			'ga', 'it_IT', 'it_CH', 'it', 'ja_JP', 'ja_JP_JP', 'ja', 'ko_KR', 'ko', 'lv_LV', 'lv', 'lt_LT', 'lt', 'mk_MK', 'mk', 'ms_MY',
			'ms', 'mt_MT', 'mt', 'no_NO', 'no_NO_NY', 'no', 'pl_PL', 'pl', 'pt_PT', 'pt', 'ro_RO', 'ro', 'ru_RU', 'ru', 'sr_BA', 'sr_ME',
			'sr_CS', 'sr_RS', 'sr', 'sk_SK', 'sk', 'sl_SI', 'sl', 'es_AR', 'es_BO', 'es_CL', 'es_CO', 'es_CR', 'es_DO', 'es_EC', 'es_SV',
			'es_GT', 'es_HN', 'es_MX', 'es_NI', 'es_PA', 'es_PY', 'es_PE', 'es_PR', 'es_ES', 'es_US', 'es_UY', 'es_VE', 'es', 'sv_SE',
			'sv', 'th_TH', 'th_TH_TH', 'th', 'tr_TR', 'tr', 'uk_UA', 'uk', 'vi_VN', 'vi'
		);
	}

	public static function getGoogle()
	{
		return array(
			'www.google.com', 'www.google.ac', 'www.google.com.om',
			'www.google.ad', 'www.google.ae', 'www.google.com.af',
			'www.google.com.ag', 'www.google.com.ai', 'www.google.am',
			'www.google.it.ao', 'www.google.com.ar', 'www.google.cat',
			'www.google.as', 'www.google.at', 'www.google.com.au',
			'www.google.az', 'www.google.ba', 'www.google.com.bd',
			'www.google.be', 'www.google.bf', 'www.google.bg',
			'www.google.com.bh', 'www.google.bi', 'www.google.bj',
			'www.google.com.bn', 'www.google.com.bo', 'www.google.com.br',
			'www.google.bs', 'www.google.co.bw', 'www.google.com.by',
			'www.google.com.bz', 'www.google.ca', 'www.google.com.kh',
			'www.google.cc', 'www.google.cd', 'www.google.cf',
			'www.google.cn', 'www.google.com.co', 'www.google.co.nz',
			'www.google.cg', 'www.google.ch', 'www.google.ci',
			'www.google.co.ck', 'www.google.cl', 'www.google.cm',
			'www.google.co.cr', 'www.google.com.cu', 'www.google.cv',
			'www.google.cz', 'www.google.de', 'www.google.nu',
			'www.google.dj', 'www.google.dk', 'www.google.dm',
			'www.google.com.do', 'www.google.dz', 'www.google.no',
			'www.google.com.ec', 'www.google.ee', 'www.google.com.eg',
			'www.google.es', 'www.google.com.et', 'www.google.com.np',
			'www.google.fi', 'www.google.com.fj', 'www.google.fm',
			'www.google.fr', 'www.google.ga', 'www.google.nl',
			'www.google.ge', 'www.google.gf', 'www.google.gg',
			'www.google.com.gh', 'www.google.com.gi', 'www.google.nr',
			'www.google.gl', 'www.google.gm', 'www.google.gp',
			'www.google.gr', 'www.google.com.gt', 'www.google.com.ni',
			'www.google.gy', 'www.google.com.hk', 'www.google.hn',
			'www.google.hr', 'www.google.ht', 'www.google.com.ng',
			'www.google.hu', 'www.google.co.id', 'www.google.iq',
			'www.google.ie', 'www.google.co.il', 'www.google.com.nf',
			'www.google.im', 'www.google.co.in', 'www.google.io',
			'www.google.is', 'www.google.it', 'www.google.ne',
			'www.google.je', 'www.google.com.jm', 'www.google.jo',
			'www.google.co.jp', 'www.google.co.ke', 'www.google.com.na',
			'www.google.ki', 'www.google.kg', 'www.google.co.kr',
			'www.google.com.kw', 'www.google.kz', 'www.google.co.mz',
			'www.google.la', 'www.google.com.lb', 'www.google.com.lc',
			'www.google.li', 'www.google.lk', 'www.google.com.my',
			'www.google.co.ls', 'www.google.lt', 'www.google.lu',
			'www.google.lv', 'www.google.com.ly', 'www.google.com.mx',
			'www.google.co.ma', 'www.google.md', 'www.google.me',
			'www.google.mg', 'www.google.mk', 'www.google.mw',
			'www.google.ml', 'www.google.mn', 'www.google.ms',
			'www.google.com.mt', 'www.google.mu', 'www.google.mv',
			'www.google.com.pa', 'www.google.com.pe', 'www.google.com.ph',
			'www.google.com.pk', 'www.google.pn', 'www.google.com.pr',
			'www.google.ps', 'www.google.pt', 'www.google.com.py',
			'www.google.com.qa', 'www.google.ro', 'www.google.rs',
			'www.google.ru', 'www.google.rw', 'www.google.com.sa',
			'www.google.com.sb', 'www.google.sc', 'www.google.se',
			'www.google.com.sg', 'www.google.sh', 'www.google.si',
			'www.google.sk', 'www.google.com.sl', 'www.google.sn',
			'www.google.sm', 'www.google.so', 'www.google.st',
			'www.google.com.sv', 'www.google.td', 'www.google.tg',
			'www.google.co.th', 'www.google.tk', 'www.google.tl',
			'www.google.tm', 'www.google.to', 'www.google.com.tn',
			'www.google.com.tr', 'www.google.tt', 'www.google.com.tw',
			'www.google.co.tz', 'www.google.com.ua', 'www.google.co.ug',
			'www.google.co.uk', 'www.google.us', 'www.google.com.uy',
			'www.google.co.uz', 'www.google.com.vc', 'www.google.co.ve',
			'www.google.vg', 'www.google.co.vi', 'www.google.com.vn',
			'www.google.vu', 'www.google.ws', 'www.google.co.za',
			'www.google.co.zm', 'www.google.co.zw'
		);
	}

	public static function getDomain()
	{
		return array('Adzuna', 'Bixee', 'CareerBuilder', 'Craigslist', 'Dice', 'Eluta.ca', 'Hotjobs', 'JobStreet', 'Incruit', 'Indeed', 'Glassdoor', 'LinkUp', 'Monster', 'Naukri',
			'Yahoo', 'Legal', 'GoogleScholar', 'Lexis', 'Manupatra', 'Quicklaw', 'WestLaw', 'Medical', 'Bing Health', 'Bioinformatic', 'CiteAb', 'EB-eye', 'Entrez', 'mtv', 'ubuntu',
			'GenieKnows', 'GoPubMed', 'Healia', 'Healthline', 'Nextbio', 'PubGene', 'Quertle', 'Searchmedica', 'WebMD', 'News', 'BingNews', 'Daylife', 'GoogleNews', 'aol', 'microsoft',
			'MagPortal', 'Newslookup', 'Nexis', 'Topix', 'Trapit', 'YahooNews', 'People', 'Comfibook', 'Ex.plode', 'InfoSpace', 'PeekYou', 'Spock', 'Spokeo', 'WorldwideHelpers', 'iPhone',
			'Zabasearch', 'ZoomInfo', 'Fizber', 'HotPads', 'Realtor', 'Redfin', 'Rightmove', 'Trulia', 'Zillow', 'Zoopla', 'StuRents', 'globo', 'sbt', 'band', 'cnn'
		);
	}

	public static function getTLD()
	{
		return array('aero', 'arpa', 'biz', 'com', 'coop', 'edu', 'gov', 'info', 'int', 'mil', 'museum', 'name', 'net', 'org', 'pro', 'tel');
	}

	public static function getArchive()
	{
		return array('admin', 'index', 'wp-admin', 'info', 'shop', 'file', 'out', 'open', 'news', 'add', 'profile', 'search', 'open', 'photo', 'insert', 'view');
	}

	public static function getExt()
	{
		return array('exe', 'php', 'asp', 'aspx', 'jsf', 'html', 'htm', 'lua', 'log', 'cgi', 'sh', 'css', 'py', 'sql', 'xml', 'rss');
	}

	public static function getPasta()
	{
		return array('App_Files', 'Assets', 'CFFileServlet', 'CFIDE', 'Communication', 'Computers', 'CoreAdminHome', 'CoreHome', 'Crawler', 'Creator',
			'DECOM', 'Dashboard', 'Drives', 'Dynamic', 'FCKeditor', 'Feedback', 'Files', 'Flash', 'Forms', 'Help', 'ICEcore', 'IO', 'Image', 'JPG', 'getold',
			'JSP', 'KFSI', 'Laguna', 'Login', 'Motors', 'MultiSites', 'NR', 'OCodger', 'RSS', 'Safety', 'Smarty', 'Software', 'Static', 'Stress', 'getfull',
			'Sugarcrm', 'Travel', 'UPLOAD', 'Urussanga', 'UserFiles', '__tpl', '_fckeditor', '_info', '_machine', '_plugins', '_sample', '_samples', 'postmost',
			'_source', '_testcases', 'aaa', 'about', 'aboutus', 'abuse', 'abusers', 'ac_drives', 'acabamentos', 'mail',
			'academias', 'acao', 'acartpro', 'acatalog', 'acc', 'acc_auto_del', 'acc_beep_ken', 'acc_beep_time', 'acc_ch_mail', 'acc_fc_prsc', 'accounts', 'valid',
			'acc_html_mark', 'acc_html_rand', 'acc_lan_page', 'acc_pic_html', 'acc_profol', 'acc_soft_link', 'acc_ssd_page', 'acc_syun_ei', 'german', 'intranet', 'old',
			'acc_time_go', 'acc_wbcreator', 'accept', 'accepted', 'access', 'accessibility', 'accessories','acclg', 'account', 'paste', 'paste22',
			'acessorios', 'acontece', 'acougueiro', 'acoustic', 'act', 'action', 'activate', 'active', 'activeden', 'actualit', 'actuators', 'ad', 'informat',
			'ad_division', 'ad_rate', 'adapter', 'adapters', 'adaptive', 'adaptivei', 'adatmentes', 'adbanner', 'adblock', 'adboard', 'adclick', 'add-ons', 'add', 'delete',
			'added', 'addon', 'address', 'adduser', 'adfree', 'adhoc', 'adinfo', 'adlink', 'adlinks', 'acc_folder_vw', 'acc_syun_su'
		);
	}

	public static function getLocals()
	{
		return array('ac', 'ad', 'ae', 'af', 'ag', 'al', 'am', 'an', 'ao', 'aq', 'ar', 'as', 'at', 'au', 'aw', 'az', 'ba', 'bb', 'bd', 'be', 'bf', 'bg', 'bh', 'bi', 'bj', 'bm', 'bn',
			'bw', 'by', 'bz', 'ca', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl', 'cm', 'cn', 'co', 'cr', 'cu', 'cv', 'cx', 'cy', 'cz', 'de', 'dj', 'dk', 'dm', 'do', 'dz', 'bo', 'br',
			'ec', 'ee', 'eg', 'er', 'es', 'et', 'eu', 'fi', 'fj', 'fk', 'fm', 'fo', 'fr', 'ga', 'gb', 'gd', 'ge', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gn', 'gp', 'gq', 'gr', 'bs', 'bt',
			'gs', 'gt', 'gu', 'gw', 'gy', 'hk', 'hm', 'hn', 'hr', 'ht', 'hu', 'id', 'ie', 'il', 'im', 'in', 'io', 'iq', 'ir', 'is', 'it', 'je', 'jm', 'jo', 'jp', 'ke', 'kg', 'bv',
			'kh', 'ki', 'km', 'kn', 'kr', 'kw', 'ky', 'kz', 'la', 'lb', 'lc', 'li', 'lk', 'lr', 'ls', 'lt', 'lu', 'lv', 'ly', 'ma', 'mc', 'md', 'me', 'mg', 'mh', 'mk', 'ml',
			'mm', 'mn', 'mo', 'mp', 'mq', 'mr', 'ms', 'mt', 'mu', 'mv', 'mw', 'mx', 'my', 'mz', 'nb', 'nc', 'ne', 'nf', 'ng', 'ni', 'nl', 'no', 'np', 'nr', 'nu', 'nz', 'om',
			'pa', 'pe', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'ps', 'pt', 'pw', 'py', 'qa', 're', 'ro', 'ru', 'rw', 'sa', 'sb', 'sc', 'sd', 'se', 'sg', 'sh', 'si',
			'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'sr', 'ss', 'st', 'su', 'sv', 'sy', 'sz', 'tc', 'td', 'tf', 'tg', 'th', 'tj', 'tk', 'tl', 'tm', 'tn', 'to', 'tr', 'tt', 'tv',
			'tw', 'tz', 'ua', 'ug', 'uk', 'um', 'us', 'uy', 'uz', 'va', 'vc', 've', 'vg', 'vi', 'vn', 'vu', 'wf', 'ws', 'ye', 'yt', 'yu', 'za', 'zm', 'zw', 'ai',
		);
	}

	public static function getBlacklist()
	{
		return array('webcache', 'google');
	}

	public static function getQuotes()
	{
		return array('A dwarf on a giant\'s shoulders sees the farthest of the two');
	}
}
##############################################################
#                           FILTER                           #
##############################################################
abstract class Filter
{
	public static function filterUrlTag($value = NULL)
	{
		return(!is_null($value)) ? str_replace('"', '', str_replace('href="', '', str_replace('src="', '', str_replace('value="', '', $value)))) : NULL;
	}

	public static function checkUrl($url)
	{
		return preg_match("#\b(http[s]?://|ftp[s]?://){1,}?([-a-zA-Z0-9\.]+)([-a-zA-Z0-9\.]){1,}([-a-zA-Z0-9_\.\#\@\:%_/\?\=\~\-\//\!\'\(\)\s\^\:blank:\:punct:\:xdigit:\:space:\$]+)#si", $url);
	}

	public static function checkUrlBlacklist($url)
	{
		$regexp_blacklist = '(' . implode(')?(' , Config::getBlacklist()) . ')';
		return !preg_match("/(.*)?" . $regexp_blacklist . "(.*)?/", $url);
	}

	public static function filterGoogleUrl($html)
	{
		$reg = "#\b(href=\"|src=\"|value=\"http[s]?://|href=\"|src=\"|value=\"ftp[s]?://){1,}?([-a-zA-Z0-9\.]+)([-a-zA-Z0-9\.]){1,}([-a-zA-Z0-9_\.\#\@\:%_/\?\=\~\-\//\!\'\(\)\s\^\:blank:\:punct:\:xdigit:\:space:\$]+)#si";
		$html = str_replace('href="/url?q=', 'href="', $html);

		preg_match_all($reg, $html, $html);

		$retour = array_filter(array_unique($html[0]));
		foreach ($retour as $key => $value)
		{

			$retour[$key] = self::filterUrlTag($value);

			if(!self::checkUrl($retour[$key]) || !self::checkUrlBlacklist($retour[$key]))
			{
				unset($retour[$key]);
			}
		}

		return $retour;
	}
}
##############################################################
#                           RANDOM                           #
##############################################################
abstract class Random
{

	private static function getRandom(array $array)
	{
		return $array[rand(0, count($array) - 1)];
	}

	public static function userAgentRandom()
	{
		return self::getRandom(Config::getAgentBrowser()) . '/' . rand(1, 20) . '.' . rand(0, 20) . ' (' . self::getRandom(Config::getAgentSystem()) . ' ' . rand(1, 7) . '.' . rand(0, 9) . '; ' . self::getRandom(Config::getAgentLocals()) . ';)';
	}

	public static function googleRandom()
	{
		return self::getRandom(Config::getGoogle());
	}

	public static function quoteRandom()
	{
		return self::getRandom(Config::getQuotes());
	}

	public static function urlReferenceRandom() {
		return 'http://www.' . self::getRandom(Config::getDomain())
				. '.' . self::getRandom(Config::getLocals())
				. '/' . self::getRandom(Config::getPasta())
				. '/' . self::getRandom(Config::getArchive())
				. '.' . self::getRandom(Config::getExt());
	}
}
##############################################################
#                          URLBUILDER                        #
##############################################################
abstract class UrlBuilder
{
	public static function buildGoogle($ask)
	{
		$urls = array();
		if(is_array($ask))
		{
			foreach ($ask as $a)
			{
				$urls[] = 'https://' . Random::googleRandom() . '/search?q=' . urlencode($a) . '&num=1500&btnG=Search&pws=1';
			}
		}
		else
		{
			$urls[] = 'https://' . Random::googleRandom() . '/search?q=' . urlencode($ask) . '&num=1500&btnG=Search&pws=1';
		}
		return $urls;
	}

}
##############################################################
#                          MULTICURL                         #
##############################################################
class MultiCurl
{
	private $urls;
	private $mh;

	const CURL_DELAY = 100;

	public function __construct(array $urls)
	{
		$this->urls       = $urls;
		$this->curl_array = array();
		$this->mh         = curl_multi_init();
	}

	public function init()
	{
		foreach ($this->urls as $url)
		{
			$this->curl_array[] = self::createCurl($url);
			curl_multi_add_handle($this->mh, end($this->curl_array));
		}
	}

	public static function createCurl($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, Random::userAgentRandom()); // set user agent
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_REFERER, Random::urlReferenceRandom());

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		return $ch;
	}

	public function run()
	{
		$running = NULL;
		do
		{
			usleep(self::CURL_DELAY);
			curl_multi_exec($this->mh, $running);
		}
		while ($running > 0);

		$result = array();
		foreach ($this->urls as $i => $url)
		{
			$result[] = array(
					curl_multi_getcontent($this->curl_array[$i]),
					curl_getinfo($this->curl_array[$i]),
					curl_error($this->curl_array[$i])
				);
		}

		foreach ($this->urls as $i => $url) {
			curl_multi_remove_handle($this->mh, $this->curl_array[$i]);
		}

		return $result;
	}
}
##############################################################
#                             CORE                           #
##############################################################
stream_set_blocking(STDIN, 0);

$command_list = array(
		'action:',
		'query:',
		'regexp:',
		'rep_search:',
		'rep_by:',
		'multiply:',
		'help::',
		'verbose::'
	);

$options = getopt('h::v::g::s::q:', $command_list);

$api = new Api();
$api->verbose = isset($options['verbose']) || isset($options['v']);

$api->displayHeader();
$api->displayTestimonial();
$api->displayQuote();

$action      = !isset($options['action']) ?: $options['action'];
$regexp      = !isset($options['regexp']) ?: $options['regexp'];
$rep_search  = !isset($options['rep_search']) ?: $options['rep_search'];
$rep_by      = !isset($options['rep_by']) ?: $options['rep_by'];
$preg_search = !isset($options['preg_search']) ?: $options['preg_search'];
$preg_by     = !isset($options['preg_by']) ?: $options['preg_by'];
$multiply    = !isset($options['multiply']) ?: $options['multiply'];

$help = isset($options['help']) || isset($options['h']);

if(($query = stream_get_contents(STDIN)) == '')
{
	$query = isset($options['q']) ? array($options['q']) : (isset($options['query']) ?: array($options['query']));
}
else
{
	$query = explode("\n", $query);
	foreach($query as &$q)
	{
		if(trim($q) == '')
		{
			unset($q);
		}
	}
}


if(
    $help 
	|| $query === true
    || ($rep_search === true && $rep_by !== true || $rep_search !== true && $rep_by === true)
    || ($preg_search === true && $preg_by !== true || $preg_search !== true && $preg_by === true)
    )
{
	echo '[+] Usage : multicurl.php --action ACTION [OPTIONS]', "\n";
	echo '[+]', "\n";
	echo '[+]         ACTION :', "\n";
	echo '[+]              - google | g : Needs parameter query, will find for query on google', "\n";
	echo '[+]              - simple | s : Needs parameter query, will curl query', "\n";
	echo '[+]', "\n";
	echo '[+]         OPTIONS :', "\n";
	echo '[+]              - query   | q : It might be an URL (or an array of URL) or a word (or an array of word) to search in google', "\n";
	echo '[+]                              Query can also be defined using standard input', "\n";
	echo '[+]                              Ex : echo "google.fr" | ./multicurl.php --action simple', "\n";
	echo '[+]                              Is the same as : ./multicurl.php --action simple --query google.fr', "\n";
	echo '[+]              - regexp      : Will filter output using regexp (default only display links)', "\n";
	echo '[+]                              Ex :  ./multicurl.php --action simple --query test.com --regexp \'/(.*)?\<div id="footer"\>(.*)?\<\/div\>(.*)?/\'', "\n";
	echo '[+]              - rep_search  : Will replace pattern ...', "\n";
	echo '[+]              - rep_by      : ... by this pattern (in output)', "\n";
	echo '[+]              - preg_search : Will replace pattern (using regexp) ...', "\n";
	echo '[+]              - preg_by     : ... by this pattern (in output)', "\n";
	echo '[+]              - multiply    : Multiply output by n', "\n";
	echo '[+]              - verbose | v : Display more informations', "\n";
	echo '[+]              - help    | h : Display this help', "\n";
	exit;
}

if(isset($options['s']))
{
	$urls = $query;
}
elseif(isset($options['g']))
{
	$urls = UrlBuilder::buildGoogle($query);
}
else
{
	switch ($action)
	{
		case 'simple':
			$urls = $query;
			break;

		case 'google':
			$urls = UrlBuilder::buildGoogle($query);
			break;
	}
}

$multiCurl = new MultiCurl($urls);
$multiCurl->init();

$result = $multiCurl->run();

foreach ($result as $key => $value)
{
	$html = $value[0];
	if($regexp !== true)
	{
		preg_match_all($regexp, $html, $html);
		$hits = array_filter(array_unique($html[0]));
	}
	else
	{
		$hits = Filter::filterGoogleUrl($html);
		foreach ($hits as $c => $hit)
		{
			$hits[$c] = urldecode($hit);
		}
	}
	if($rep_search !== true)
	{
		foreach ($hits as $c => $hit)
		{
			$hits[$c] = str_replace($rep_search, $rep_by, $hit);
		}
	}
	if($preg_search !== true)
	{
		foreach ($hits as $c => $hit)
		{
			$hits[$c] = preg_replace($preg_search, $preg_by, $hit);
		}
	}
	$count = count($hits);
	if(is_numeric($multiply) && $multiply > 0)
	{
		$tmp_hits = $hits;
		$multiply_tmp = $multiply;

		while($multiply_tmp > 1)
		{
			foreach ($tmp_hits as $key => $tmp_hit)
			{
				$hits[] = $tmp_hit;
			}
			$multiply_tmp--;
		}
	}
	$api->display("[+] " . ucfirst(strtolower($action)) . " search \"{$query[$key]}\" : $count results found !");
	foreach ($hits as $hit)
	{
		$api->display("[++] $hit", $hit);
	}
}

?>
