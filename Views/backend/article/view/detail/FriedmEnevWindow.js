//{block name="backend/article/view/detail/window"}
//{$smarty.block.parent}
Ext.define('Ext.gbmedia.form.field.ColorCombo', {
	extend: 'Ext.form.field.ComboBox',
	alias: 'widget.gbmediaColorCombo',
	defaultCls: 'ext-color-default',
	initComponent: function(){
		this.listConfig = Ext.apply(this.listConfig || {}, {
		    getInnerTpl: this.getListItemTpl
		});
		this.callParent(arguments);
	},
	getListItemTpl: function(displayField) {
		return '{literal}<div class="x-combo-list-item ext-color-"><div class="ext-color-picker-icon" style="background:#{value};">&#160;</div><div class="ext-color-picker-text">{' + displayField + '}</div></div>{/literal}';
	},
    afterRender: function(){
        this.callParent(arguments);
        this.wrap = this.el.down('.x-form-item-body');
        this.wrap.addCls('ext-color-picker');
        this.icon = Ext.core.DomHelper.append(this.wrap, {
            tag: 'div',
			cls: 'ext-color-picker-icon ext-color-picker-mainicon',
			id: this.id+'-ext-color-picker-mainicon',
			style: {
				background:(this.valueData == undefined ? 'transparent' : '#'+this.valueData)
			}
        });
    },
    setValue: function(value) {
        this.valueData = value;
        if(typeof value == 'object'){
        	this.valueData = value[0].data.value;
        }
        if (this.wrap && value) {
			this.wrap.down('.ext-color-picker-mainicon').setStyle({
				background:(this.valueData == undefined ? 'transparent' : '#'+this.valueData),
			});
        }
        this.callParent(arguments);
    }
});
Ext.override(Shopware.apps.Article.view.detail.Window, {
	createBaseTab: function(){
		var me = this;
		var container = me.callParent(arguments);
		var panel = container.items.items[0];
		panel.add(me.createElementsFriedmEnev());
		return container;
	},
    createElementsFriedmEnev:function () {
        var leftContainer,
			rightContainer,
			itms,
			me = this;
        me.klasseStore = Ext.create('Ext.data.Store', {
            autoLoad: true,
            fields: ['value', 'name'],
            proxy: {
                type: 'ajax',
                actionMethods: [
                    { read: 'POST'}
                ],
                api: {
                    read: '{url controller=FriedmEnev action=klasse}'
                },
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        });
		me.colorStore = Ext.create('Ext.data.Store', {
			autoLoad: true,
			fields: ['value', 'name'],
			proxy: {
				type: 'ajax',
				actionMethods: [
					{ read: 'POST'}
				],
				api: {
					read: '{url controller=FriedmEnev action=color}'
				},
				reader: {
					type: 'json',
					root: 'data'
				}
			}
		});

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth:0.5,
            defaults: {
                labelWidth: 155,
                anchor: '100%',
				xtype: 'textfield'
            },
            padding: '0 20 0 0',
            layout: 'anchor',
            border:false,
            items:me.createLeftEnev()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth:0.5,
            layout: 'anchor',
            defaults: {
                labelWidth: 155,
                anchor: '100%',
				xtype: 'textfield'
            },
            border:false,
            items:me.createRightEnev()
        });
        itms = Ext.create('Ext.form.FieldSet',{
			title: '{s name="title" namespace="frontend/plugins/FriedmEnev"}Energieeinsparverordnung (EnEV){/s}',
			layout: 'column',
			defaults: {
				labelWidth: 155
			},
			items: [ leftContainer, rightContainer ]
	    });

        return Ext.create('Ext.container.Container', {
            items: [itms]
        });


    },
	createLeftEnev: function() {
		var me = this;
		return [{
			xtype: 'combobox',
			name: 'FriedmEnev_klasse',
			fieldLabel: '{s name="klasse" namespace="frontend/plugins/FriedmEnev"}Effizienzklasse{/s}',
			store: me.klasseStore,
			displayField: 'name',
			valueField: 'value',
			editable: true
		},{
            xtype: 'combobox',
            name: 'FriedmEnev_spectrumFrom',
            fieldLabel: '{s name="spectrumFromLabel" namespace="frontend/plugins/FriedmEnev"}Spektrum von{/s}',
            store: me.klasseStore,
            displayField: 'name',
            valueField: 'value',
            editable: true
        },{
            xtype:'mediaselectionfield',
            allowBlank: true,
            buttonText: '',
            multiSelect: false,
            readOnly: false,
            name: 'FriedmEnev_image',
            fieldLabel: '{s name="image" namespace="frontend/plugins/FriedmEnev"}Bild{/s}',
            translatable: true,
            cls: 'translatable-mediaselection'
        },{
            xtype: 'checkbox',
            name: 'FriedmEnev_active',
            fieldLabel: '{s name="active" namespace="frontend/plugins/FriedmEnev"}Aktiv{/s}',
            inputValue: true,
            uncheckedValue:false
        }];
	},
	createRightEnev: function() {
		var me = this;

		return [{
            xtype: 'gbmediaColorCombo',
            name: 'FriedmEnev_color',
            fieldLabel: '{s name="color" namespace="frontend/plugins/FriedmEnev"}Farbe{/s}',
            maxLength: 6,
            enforceMaxLength: true,
            regex: /^[a-fA-F0-9]+$/,
            store: me.colorStore,
            displayField: 'name',
            valueField: 'value',
            editable: false
        },{
            xtype: 'combobox',
            name: 'FriedmEnev_spectrum',
            fieldLabel: '{s name="spectrumLabel" namespace="frontend/plugins/FriedmEnev"}Spektrum bis{/s}',
            store: me.klasseStore,
            displayField: 'name',
            valueField: 'value',
            editable: true
        },{
            xtype:'mediaselectionfield',
            allowBlank: true,
            buttonText: '',
            multiSelect: false,
            readOnly: false,
            name: 'FriedmEnev_download',
            fieldLabel: '{s name="download" namespace="frontend/plugins/FriedmEnev"}Datenblatt{/s}',
            translatable: true,
            cls: 'translatable-mediaselection'
        }];
	}
});
//{/block}