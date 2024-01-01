<?php
namespace Skb_Cife;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*--------------------------
*   Class Elusive Icon Manager
* -------------------------*/
class Skb_Cife_Elusive_Icon_Manager{

    private static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function __construct(){
        $this->init();
    }

    public function init() {

        // Custom icon filter
        add_filter( 'elementor/icons_manager/additional_tabs', [ $this,'skb_cife_elusive_icon'] );  

    }

	public function skb_cife_elusive_icon( $elusive_icons_args = array() ) {

	    // Append new icons
	    $elusive_icons = array(
			'address-book',
			'adjust-alt',
			'adjust',
			'adult',
			'align-center',
			'align-justify',
			'align-left',
			'align-right',
			'arrow-down',
			'arrow-left',
			'arrow-right',
			'arrow-up',
			'asl',
			'asterisk',
			'backward',
			'ban-circle',
			'barcode',
			'behance',
			'bell',
			'blind',
			'blogger',
			'bold',
			'book',
			'bookmark-empty',
			'bookmark',
			'braille',
			'briefcase',
			'broom',
			'brush',
			'bulb',
			'bullhorn',
			'calendar-sign',
			'calendar',
			'camera',
			'car',
			'caret-down',
			'caret-left',
			'caret-right',
			'caret-up',
			'cc',
			'certificate',
			'check-empty',
			'check',
			'chevron-down',
			'chevron-left',
			'chevron-right',
			'chevron-up',
			'child',
			'circle-arrow-down',
			'circle-arrow-left',
			'circle-arrow-right',
			'circle-arrow-up',
			'cloud-alt',
			'cloud',
			'cog-alt',
			'cog',
			'cogs',
			'comment-alt',
			'comment',
			'compass-alt',
			'compass',
			'credit-card',
			'css',
			'dashboard',
			'delicious',
			'deviantart',
			'digg',
			'download-alt',
			'download',
			'dribbble',
			'edit',
			'eject',
			'envelope-alt',
			'envelope',
			'error-alt',
			'error',
			'eur',
			'exclamation-sign',
			'eye-close',
			'eye-open',
			'facebook',
			'facetime-video',
			'fast-backward',
			'fast-forward',
			'female',
			'file-alt',
			'file-edit-alt',
			'file-edit',
			'file-new-alt',
			'file-new',
			'file',
			'film',
			'filter',
			'fire',
			'flag-alt',
			'flag',
			'flickr',
			'folder-close',
			'folder-open',
			'folder-sign',
			'folder',
			'font',
			'fontsize',
			'fork',
			'forward-alt',
			'forward',
			'foursquare',
			'friendfeed-rect',
			'friendfeed',
			'fullscreen',
			'gbp',
			'gift',
			'github-text',
			'github',
			'glass',
			'glasses',
			'globe-alt',
			'globe',
			'googleplus',
			'graph-alt',
			'graph',
			'group-alt',
			'group',
			'guidedog',
			'hand-down',
			'hand-left',
			'hand-right',
			'hand-up',
			'hdd',
			'headphones',
			'hearing-impaired',
			'heart-alt',
			'heart-empty',
			'heart',
			'home-alt',
			'home',
			'hourglass',
			'idea-alt',
			'idea',
			'inbox-alt',
			'inbox-box',
			'inbox',
			'indent-left',
			'indent-right',
			'info-circle',
			'instagram',
			'iphone-home',
			'italic',
			'key',
			'laptop-alt',
			'laptop',
			'lastfm',
			'leaf',
			'lines',
			'link',
			'linkedin',
			'list-alt',
			'list',
			'livejournal',
			'lock-alt',
			'lock',
			'magic',
			'magnet',
			'male',
			'map-marker-alt',
			'map-marker',
			'mic-alt',
			'mic',
			'minus-sign',
			'minus',
			'move',
			'music',
			'myspace',
			'network',
			'off',
			'ok-circle',
			'ok-sign',
			'ok',
			'opensource',
			'paper-clip-alt',
			'paper-clip',
			'path',
			'pause-alt',
			'pause',
			'pencil-alt',
			'pencil',
			'person',
			'phone-alt',
			'phone',
			'photo-alt',
			'photo',
			'picasa',
			'picture',
			'pinterest',
			'plane',
			'play-alt',
			'play-circle',
			'play',
			'plurk-alt',
			'plurk',
			'plus-sign',
			'plus',
			'podcast',
			'print',
			'puzzle',
			'qrcode',
			'question-sign',
			'question',
			'quote-alt',
			'quote-right-alt',
			'quote-right',
			'quotes',
			'random',
			'record',
			'reddit',
			'redux',
			'refresh',
			'remove-circle',
			'remove-sign',
			'remove',
			'repeat-alt',
			'repeat',
			'resize-full',
			'resize-horizontal',
			'resize-small',
			'resize-vertical',
			'return-key',
			'retweet',
			'reverse-alt',
			'road',
			'rss',
			'scissors',
			'screen-alt',
			'screen',
			'screenshot',
			'search-alt',
			'search',
			'share-alt',
			'share',
			'shopping-cart-sign',
			'shopping-cart',
			'signal',
			'skype',
			'slideshare',
			'smiley-alt',
			'smiley',
			'soundcloud',
			'speaker',
			'spotify',
			'stackoverflow',
			'star-alt',
			'star-empty',
			'star',
			'step-backward',
			'step-forward',
			'stop-alt',
			'stop',
			'stumbleupon',
			'tag',
			'tags',
			'tasks',
			'text-height',
			'text-width',
			'th-large',
			'th-list',
			'th',
			'thumbs-down',
			'thumbs-up',
			'time-alt',
			'time',
			'tint',
			'torso',
			'trash-alt',
			'trash',
			'tumblr',
			'twitter',
			'universal-access',
			'unlock-alt',
			'unlock',
			'upload',
			'usd',
			'user',
			'viadeo',
			'video-alt',
			'video-chat',
			'video',
			'view-mode',
			'vimeo',
			'vkontakte',
			'volume-down',
			'volume-off',
			'volume-up',
			'w3c',
			'warning-sign',
			'website-alt',
			'website',
			'wheelchair',
			'wordpress',
			'wrench-alt',
			'wrench',
			'youtube',
			'zoom-in',
			'zoom-out'
	    );
	    
	    $elusive_icons_args['skb_cife-elusive-icon'] = array(
	        'name'          => 'skb_cife-elusive-icon',
	        'label'         => esc_html__( 'Skyboot:: Elusive Icons', 'skb_cife' ),
	        'labelIcon'     => 'fa fa-user',
	        'prefix'        => 'el-',
	        'displayPrefix' => 'el',
	        'url'           => SKB_CIFE_ASSETS . 'css/elusive-icons.min.css',
	        'icons'         => $elusive_icons,
	        'ver'           => SKB_CIFE_VERSION,
	    );

	    return $elusive_icons_args;
	}



}
Skb_Cife_Elusive_Icon_Manager::instance();