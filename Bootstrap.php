<?php
/**
 * gb media
 *
 * @category       Shopware
 * @package        Shopware_Plugins
 * @subpackage     FriedmEnev
 * @copyright      Copyright (c) 2018, gb media
 * @license        proprietary
 * @author         Giuseppe Bottino
 * @link           http://www.gb-media.biz
 */

use Shopware\CustomModels\FriedmEnev\Repository;

class Shopware_Plugins_Frontend_FriedmEnev_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    private $logoImg = 'data:image/png;base64,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';
    private $pluginName = 'FriedmEnev';
    private $dbTable = 's_plugin_FriedmEnev';
    private $manager;

    /**
     * install plugin method
     *
     * @return bool
     */
    public function install()
    {
        $this->subscribeEvents();
        $this->createTable();
        $this->createForm();

        return true;
    }

    /**
     * getInfo plugin method
     *
     * @return array
     */
    public function getInfo()
    {
        return [
            'label' => $this->getLabel(),
            'version' => $this->getVersion(),
            'autor' => 'gb media',
            'copyright' => 'Copyright © 2018, gb media',
            'license' => 'proprietary',
            'support' => 'shopware@gb-media.biz',
            'link' => 'https://www.gb-media.biz',
            'description' => '<img src="' . $this->logoImg . '" /><br /><br />gb media – Shopware-Entwickler aus Refrath bei Köln<br /><br />Ich biete Ihnen professionelle Shopware-Entwicklung für Front- und Backend. Sollte eines meiner Plugins nicht Ihren Wünschen entsprechen, dann erstelle ich Ihnen gerne individuelle Erweiterungen für das Plugin.<br /><br />Als selbständiger Webentwickler habe ich meinen Fokus auf individuelle Shopware-Entwicklung gelegt. Hierbei entwickle ich Plugins für Front- und Backend und setze Themes um. Die Umsetzung führe ich mit Leidenschaft, Präzision und Zuverlässigkeit durch und setze hierbei Ihre Anforderungen um und bewältige auch etwaige Probleme.<br /><br />Gerne unterbreite ich Ihnen ein individuelles Angebot für Sonderprogrammierungen Ihres Shopware Shops.<br /><br />Bitte haben Sie Verständnis dafür, dass ich als Einzelunternehmer keinen 24-Stunden Support anbieten kann. Bei Anfragen bemühe ich mich jedoch stets um eine zeitnahe Bearbeitung.<br /><br /><strong>' . $this->getLabel() . ':</strong><br />Seit dem 1.1.2015 sind Onlineshopbetreiber verpflichtet, Kunden vor dem Kauf über die Energieeffizienz von Elektroartikeln zu informieren. Mit diesem Plugin können Sie die geforderten Informationen einfach im Artikel einpflegen.'
        ];
    }

    /**
     * getLabel plugin method
     *
     * @return string
     */
    public function getLabel()
    {
        return 'Energieeinsparverordnung (EnEV)';
    }

    /**
     * getVersion plugin method
     *
     * @return string
     */
    public function getVersion()
    {
        return '1.3.14';
    }

    /**
     * update plugin method
     *
     * @param $oldVersion
     *
     * @return array
     * @throws RuntimeException
     * @throws Zend_Db_Adapter_Exception
     */
    public function update($oldVersion)
    {
        switch ($oldVersion) {
            case '1.0.0':
            case '1.0.1':
            case '1.0.2':
            case '1.0.3':
            case '1.0.4':
            case '1.1.0':
            case '1.1.1':
            case '1.1.2':
            case '1.1.3':
            case '1.1.4':
            case '1.1.5':
            case '1.2.0':
            case '1.2.1':
            case '1.2.2':
                $this->subscribeEvents();
                Shopware()->Db()->query("ALTER TABLE `s_plugin_FriedmEnev` ADD `spectrum` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL AFTER `image`");
                break;
            case '1.3.2':
            case '1.3.3':
                $this->alterTable();
                break;
            default:
                break;
        }
        $tables = [
            's_plugin_FriedmEnev' => [
                'spectrum' => 'ALTER TABLE `s_plugin_FriedmEnev` ADD `spectrum` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL AFTER `image`',
                'spectrum_from' => 'ALTER TABLE `s_plugin_FriedmEnev` ADD `spectrum_from` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL AFTER `spectrum`',
                'ean' => 'ALTER TABLE `s_plugin_FriedmEnev` ADD `ean` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL'
            ]
        ];
        foreach ($tables as $table => $columns) {
            foreach ($columns as $column => $sql) {
                if (!Shopware()->Db()->fetchRow('SHOW COLUMNS FROM `' . $table . '` LIKE "' . $column . '"')) {
                    Shopware()->Db()->query($sql);
                }
            }
        }
        // new config form
        if(!version_compare($oldVersion, $this->getVersion(), '>=')){
            $this->createForm();
        }

        $this->subscribeEvents();

        return ['success' => true, 'invalidateCache' => ['theme', 'template'], 'message' => 'Backend neu laden!'];
    }

    /**
     * enable method
     * activates the menu entry
     *
     * @return array
     */
    public function enable()
    {
        return ['success' => true, 'invalidateCache' => ['theme', 'template']];
    }

    /**
     * helper methos to subscribe events
     */
    public function subscribeEvents()
    {
        $this->subscribeEvent(
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_' . $this->pluginName,
            'onGetControllerPathBackend'
        );
        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatch_Backend_Index',
            'onPostDispatchBackendIndex'
        );
        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatch_Backend_Article',
            'onPostDispatchBackendArticle'
        );
        $this->subscribeEvent(
            'sExport::sCreateSql::after',
            'sExportCreateSqlAfter'
        );
        $this->subscribeEvent(
            'Legacy_Struct_Converter_Convert_List_Product',
            'onConvertProduct'
        );
        $this->subscribeEvent(
            'Legacy_Struct_Converter_Convert_Product',
            'onConvertProduct'
        );
        $this->subscribeEvent(
            'Theme_Compiler_Collect_Plugin_Javascript',
            'onCollectJavascriptFiles'
        );
        $this->subscribeEvent(
            'Theme_Compiler_Collect_Plugin_Less',
            'onCollectLessFiles'
        );
        $this->subscribeEvent(
            'Theme_Inheritance_Template_Directories_Collected',
            'onCollectTemplateDir'
        );
    }

    /**
     * alter database table on update
     *
     * @return void
     * @throws RuntimeException
     * @throws Zend_Db_Adapter_Exception
     */
    public function alterTable()
    {
        $alterTable = [
            'ALTER TABLE `s_plugin_FriedmEnev` CHANGE `download` `download` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;',
            'ALTER TABLE `s_plugin_FriedmEnev` CHANGE `image` `image` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;'
        ];
        foreach ($alterTable AS $tK => $tV) {
            Shopware()->Db()->query($tV);
        }
    }

    /**
     * create database table on install
     *
     * @return void
     */
    public function createTable()
    {
        $this->registerCustomModels();
        try {
            $schemaTool = new Doctrine\ORM\Tools\SchemaTool($this->getManager());
            $schemaTool->createSchema(
                [
                    $this->getManager()->getClassMetadata('Shopware\CustomModels\FriedmEnev\Attribute')
                ]
            );
        } catch (Exception $e) {
        }
    }

    /**
     * create config forms
     *
     * @return void
     * @throws RuntimeException
     */
    public function createForm()
    {
        $form = $this->Form();
        $parent = $this->Forms()->findOneBy(['name' => 'Frontend']);
        $form->setParent($parent);
        $form->setElement('select', 'arrowIllustration', [
            'label' => 'Darstellung des Pfeils',
            'value' => 'arrow2021',
            'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP,
            'store' => [
                ['arrow2021', 'Vorschrift 2021'],
                ['arrowOld', 'Alte Vorschrift'],
            ],
        ]);
        $form->setElement('textfield', 'klasse', [
            'label' => 'Effizienzklassen',
            'value' => 'A;B;C;D;F;G',
            'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP
        ]);
        $form->setElement('textfield', 'color', [
            'label' => 'Farben',
            'value' => '006c38;018c3b;abd602;ffdf01;ff8c08;fe1d01;ee0012',
            'scope' => \Shopware\Models\Config\Element::SCOPE_SHOP
        ]);

        // translate
        $translations = [
            'en_GB' => [
                'arrowIllustration' => 'Illustration of the arrow',
                'klasse' => 'Energy efficiency classes',
                'color' => 'Colors'
            ]
        ];
        $shopRepository = Shopware()->Models()->getRepository('\Shopware\Models\Shop\Locale');
        foreach ($translations as $locale => $snippets) {
            $localeModel = $shopRepository->findOneBy([
                'locale' => $locale
            ]);
            foreach ($snippets as $element => $snippet) {
                try {
                    if ($localeModel === null) {
                        continue;
                    }
                    $elementModel = $form->getElement($element);
                    if ($elementModel === null || $elementModel->hasTranslations()) {
                        continue;
                    }
                    $translationModel = new \Shopware\Models\Config\ElementTranslation();
                    $translationModel->setLabel($snippet);
                    $translationModel->setLocale($localeModel);
                    $elementModel->addTranslation($translationModel);
                } catch (\Exception $e) {
                }
            }
        }
    }

    /**
     * collect plugin javascript for theme compiler
     * <script src="{link file="frontend/_public/src/js/jquery.FriedmTinteToner.js"}"></script>
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function onCollectJavascriptFiles()
    {
        return new \Doctrine\Common\Collections\ArrayCollection([
            $this->Path() . 'Views/frontend/_public/src/js/tooltipsterTooltips.js',
            $this->Path() . 'Views/frontend/_public/src/js/jquery.FriedmEnev.js'
        ]);
    }

    /**
     * collect plugin less for theme compiler
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function onCollectLessFiles()
    {
        $less = new \Shopware\Components\Theme\LessDefinition(
            [],
            [
                $this->Path() . 'Views/frontend/_public/src/less/tooltipster.less',
                $this->Path() . 'Views/frontend/_public/src/less/FriedmEnev.less'
            ]
        );

        return new \Doctrine\Common\Collections\ArrayCollection([$less]);
    }

    /**
     * When index backend module was loaded, add template-directory
     * Also extend the template
     *
     * @param Enlight_Event_EventArgs $args
     *
     * @return void
     */
    public function onPostDispatchBackendIndex(Enlight_Event_EventArgs $args)
    {
        if ($this->isExtensionInstalled()) {
            return;
        }
        $view = $args->getSubject()->View();
        $view->addTemplateDir($this->Path() . 'Views/');
        $view->extendsTemplate('backend/base/' . $this->pluginName . '/header.tpl');
    }

    /**
     * Returns to controller path to our SwagUpdate backend controller
     *
     * @param  Enlight_Event_EventArgs $args
     *
     * @return string
     */
    public function onGetControllerPathBackend(Enlight_Event_EventArgs $args)
    {
        return $this->Path() . 'Controllers/Backend/' . $this->pluginName . '.php';
    }

    /**
     * Extends the required backend components of the article module
     *
     * @param Enlight_Event_EventArgs $args
     *
     * @return bool
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function onPostDispatchBackendArticle(Enlight_Event_EventArgs $args)
    {
        $view = $args->getSubject()->View();
        $request = $args->getSubject()->Request();
        $action = $args->getRequest()->getActionName();

        if ($this->isExtensionInstalled()) {
            return true;
        }
        $view->addTemplateDir($this->Path() . 'Views/');
        if ($action == 'load') {
            $view->extendsTemplate('backend/article/model/FriedmEnev.js');
            $view->extendsTemplate('backend/article/view/detail/FriedmEnevWindow.js');
        } else {
            if ($action == 'loadStores') {
                $data = $view->getAssign('data');
                $article = $data['article'][0];
                $rep = $this->getRepository();
                $result = $rep->getDataByArticleID($article['id']);
                if (!$result) {
                    $result = new \Shopware\CustomModels\FriedmEnev\Attribute();
                }
                if ($result) {
                    $attr = [];
                    $myParams = $this->getManager()->toArray($result);
                    unset($myParams['id']);

                    foreach ($myParams as $pK => $pV) {
                        $attr[$this->pluginName . '_' . $pK] = $pV;
                    }
                    $data['article'][0] = array_merge($data['article'][0], $attr);
                    $view->assign('data', $data);
                }
            } else {
                if ($action == 'getArticle') {
                    $data = $view->getAssign('data');
                    $article = $data[0];
                    $rep = $this->getRepository();
                    $result = $rep->getDataByArticleID($article['id']);
                    if (!$result) {
                        $result = new \Shopware\CustomModels\FriedmEnev\Attribute();
                    }
                    if ($result) {
                        $attr = [];
                        $myParams = $this->getManager()->toArray($result);
                        unset($myParams['id']);

                        foreach ($myParams as $pK => $pV) {
                            $attr[$this->pluginName . '_' . $pK] = $pV;
                        }
                        $data[0] = array_merge($data[0], $attr);
                        $view->assign('data', $data);
                    }
                } else {
                    if ($action == 'save') {
                        $params = $request->getParams();
                        if ($request->has('id')) {
                            $articleID = (int) $request->getParam('id');
                        } else {
                            $result = $this->getManager()->getRepository('Shopware\Models\Article\Detail')->findOneBy(
                                ['number' => $params['mainDetail'][0]['number']]
                            );
                            if (!$result) {
                                return;
                            }
                            $articleID = $result->getArticle()->getId();
                        }
                        if (!$attr = $this->getRepository()->getDataByArticleID($articleID)) {
                            $attr = new \Shopware\CustomModels\FriedmEnev\Attribute();
                        }
                        $data = [
                            'articleId' => $articleID,
                            'active' => ($request->getParam($this->pluginName . '_active', 'false') != 'false' ? 1 : 0),
                            'ean' => ($params['mainDetail'][0]['ean'] != '' ? $params['mainDetail'][0]['ean'] : null),
                            'color' => $request->getParam($this->pluginName . '_color', 'ff0000'),
                            'download' => $request->getParam($this->pluginName . '_download', ''),
                            'image' => $request->getParam($this->pluginName . '_image', ''),
                            'klasse' => $request->getParam($this->pluginName . '_klasse', ''),
                            'spectrum' => $request->getParam($this->pluginName . '_spectrum'),
                            'spectrumFrom' => $request->getParam($this->pluginName . '_spectrumFrom'),
                        ];
                        $attr->fromArray($data);
                        $this->getManager()->persist($attr);
                        $this->getManager()->flush();
                    }
                }
            }
        }

        return true;
    }

    /**
     * bug fix SmartyException: directory not allowed by security setting
     *
     * @param Enlight_Event_EventArgs $args
     */
    public function onCollectTemplateDir(\Enlight_Event_EventArgs $args)
    {
        if ($this->isExtensionInstalled()) {
            return;
        }
        $dirs = $args->getReturn();
        $dirs[] = $this->Path() . 'Views';
        $args->setReturn($dirs);
    }

    /**
     * Legacy_Struct_Converter_Convert_List_Product add data to article
     *
     * @param Enlight_Event_EventArgs $args
     *
     * @throws Enlight_Event_Exception
     * @throws RuntimeException
     */
    public function onConvertProduct(Enlight_Event_EventArgs $args)
    {
        if ($this->isExtensionInstalled()) {
            return;
        }
        $article = $args->getReturn();
        $data = [];
        if (isset($article['articleID']) && $result = $this->getRepository()->getDataByArticleID($article['articleID'])) {
            $data = $this->getManager()->toArray($result);
            $data['spectrumFrom'] = isset($data['spectrumFrom']) ? $data['spectrumFrom'] : $data['klasse'];
            $data['config'] = Shopware()->Plugins()->Frontend()->FriedmEnev()->Config()->toArray();
            $data = $this->translate($data);
        }

        $data = Shopware()->Events()->filter('Shopware_Plugins_Frontend_FriedmEnev_ConvertProduct', $data, ['subject' => $this, 'article' => $article]);

        $article[$this->pluginName] = $data;


        $args->setReturn($article);
    }

    /**
     * hook to set return value of sExport::sCreateSql
     *
     * @return void
     */
    public function sExportCreateSqlAfter(Enlight_Hook_HookArgs $arg)
    {
        $sql = $arg->getReturn();

        $on = 'enev.articleID=a.id';
        if($this->isExtensionInstalled() && strstr($sql, 'GROUP BY (d.id)')){
            $on = 'enev.articledetailsID=d.id';
        }
        $findSql = [
            'WHERE bc.articleID IS NULL',
            'FROM s_articles a'
        ];
        $replaceSql = [
            "LEFT JOIN " . $this->dbTable . " AS enev ON ".$on." \r\nWHERE bc.articleID IS NULL",
            ",enev.klasse AS enevKlasse,enev.color AS enevColor,enev.download AS enevDownload,enev.image AS enevImage,enev.spectrum_from AS enevSpectrumFrom,enev.spectrum AS enevSpectrumTo\r\nFROM s_articles a"
        ];
        $sql = str_replace($findSql, $replaceSql, $sql);
        $arg->setReturn($sql);
    }

    /**
     * Internal helper function to get access to the entity manager.
     *
     * @return Shopware\Components\Model\ModelManager
     * @throws RuntimeException
     */
    public function getManager()
    {
        if ($this->manager === null) {
            $this->manager = Shopware()->Models();
        }

        return $this->manager;
    }

    /**
     * Internal helper function to get access to the article repository.
     *
     * @return Shopware\CustomModels\FriedmEnev\Repository
     * @throws RuntimeException
     */
    public function getRepository()
    {
        return $this->getManager()->getRepository('Shopware\CustomModels\FriedmEnev\Attribute');
    }

    /**
     * The afterInit function registers the custom plugin models.
     */
    public function afterInit()
    {
        $this->registerCustomModels();

        return;
    }

    /**
     * check if extension is installed
     *
     * @return bool
     */
    public function isExtensionInstalled()
    {
        $plg = Shopware()->Db()->fetchRow('SELECT * FROM s_core_plugins WHERE name=:name AND active=:active', [
            'name' => 'FriedmEnevExt',
            'active' => 1
        ]);

        return !empty($plg);
    }

    /**
     * check if a given version is greater or equal to the currently installed version
     *
     * @param string $requiredVersion
     *
     * @return bool
     * @throws RuntimeException
     */
    protected function assertVersionGreaterThen($requiredVersion)
    {
        $version = Shopware()->Config()->version;

        return version_compare($version, $requiredVersion, '>=');
    }

    /**
     * check if templatet version >= 3
     *
     * @return bool
     * @throws RuntimeException
     */
    protected function isTemplatetVersion3()
    {
        return Shopware()->Shop()->getTemplate()->getVersion() >= 3;
    }

    /**
     * return path of plugin-directory or document-root
     *
     * @return string
     */
    public function getPluginPath($explode = 'engine', $root = false)
    {
        $pathArr = explode($explode, $this->Path());

        return $root ? $pathArr[0] : $explode . $pathArr[1];
    }

    /**
     * translate data
     *
     * @param array $data
     *
     * @return array
     * @throws RuntimeException
     */
    private function translate($data)
    {
        $shopId = Shopware()->Shop()->getId();
        $translator = Shopware()->Container()->get('translation');
        $fallbackId = null;
        $fallbackShop = Shopware()->Shop()->getFallback();
        if (!empty($fallbackShop)) {
            $fallbackId = $fallbackShop->getId();
        }
        $translation = $translator->readWithFallback($shopId, $fallbackId, 'article', $data['articleId']);
        foreach ($translation as $index => $item) {
            $key = str_replace('FriedmEnev_', '', $index);
            if(isset($data[$key])){
                $data[$key] = $item;
            }
        }

        return $data;
    }
}
