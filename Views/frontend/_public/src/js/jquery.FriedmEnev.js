/**
 *
 * Friedmann Kommunikation GmbH
 *
 * @category	Shopware
 * @package		Shopware_Plugins
 * @subpackage	FriedmEnev
 * @copyright	Copyright (c) 2017, Friedmann Kommunikation GmbH
 * @license		proprietary
 * @author		Giuseppe Bottino
 * @link		http://www.friedmann-kommunikation.de
 *
 */
;(function($) {
    $.plugin('FriedmEnev', {
        defaults: {
            'addClassPrefix': 'FriedmEnev_color',
            'paddingRight': 15,
            'tooltipDelay': 200,
            'tooltipAnimation': 'fade',
            'tooltipTrigger': 'hover',
            'openTooltipsOnTouchDevices': true,
            'pictureUrlDataAttribute': 'friedmenev-label'
        },
        init: function() {
            var me = this,
                elClass = me.opts.addClassPrefix+me.$el.data('friedmenev-id'),
                style = '.gbmed-enev-arrowOld.'+elClass+':after{ border-left-color: '+me.$el.css('background-color')+'!important; }',
                pictureUrl = me.$el.data(me.opts.pictureUrlDataAttribute);
            if(me.$el.hasClass('gbmed-enev-arrowOld')){
                me.$el.addClass(elClass+' is-visible').width(me.$el.find('.FriedmEnev_anchor').width()+me.opts.paddingRight);
            }
            $('<style>'+style+'</style>').appendTo('head');
            me.compareHeight();
            if(pictureUrl != undefined){
                me.openTooltipster(pictureUrl);
            }
            $.publish('plugin/FriedmEnev/onInitAfter', [ me, me.$el, elClass, style ]);
        },
        compareHeight: function(){
            var me = this,
                h=0;
            $.each($('.compare--group-list .entry--enev'), function (i, el) {
                if($(el).height() > h){
                    h = $(el).height();
                }
            });
            $('.compare--group-list .entry--enev').height(h);
            $.publish('plugin/FriedmEnev/onCompareHeightAfter', [ me, h ]);
        },
        openTooltipster: function (pictureUrl) {
            var me = this;
            me.$el.tooltipster({
                'content': $('<div/>').addClass('FriedmEnev_tooltip').css({
                    'background-image': 'url('+pictureUrl+')'
                }),
                'animation': me.opts.tooltipAnimation,
                'delay': me.opts.tooltipDelay,
                'touchDevices': me.opts.openTooltipsOnTouchDevices,
                'position': 'bottom',
                'autoClose': true,
                'debug': false,
                'arrow': true,
                'trigger': me.opts.tooltipTrigger
            });
            $.publish('plugin/FriedmEnev/onTooltipsterAfter', [ me, pictureUrl ]);
        }
    });
})(jQuery);