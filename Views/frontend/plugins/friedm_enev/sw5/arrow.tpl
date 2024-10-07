{block name='frontend_plugins_friedmenev_sw5_arrow'}
    {if $FriedmEnev.active}
        <div class="FriedmEnev_container_arrow_body">
            {if $listingPage}
            <div class="Mo-FriedmEnev_container_arrow_image">
                <img title="{$FriedmEnev.type}" alt="{$FriedmEnev.type}"
                      src="{link file='frontend/_public/src/img/plp/icons-enev-38x38px-'|cat:$FriedmEnev.type|cat:'.svg'}"
                />
            </div>
            {/if}
            <div class="FriedmEnev_container_arrow">
                <div class="FriedmEnev_arrow gbmed-enev-{$FriedmEnev.config.arrowIllustration}"
                     style="background:#{$FriedmEnev.color};color:#{$FriedmEnev.color};"{if strlen($FriedmEnev.image)} data-friedmenev-label="{link file=$FriedmEnev.image}"{/if}
                     data-friedmenev-id="{$FriedmEnev.id}" {if $FriedmEnev.spectrum} data-friedmenev-spectrum="true"{/if}>
                    <div class="FriedmEnev_anchor">
                        {$FriedmEnev.klasse}
                        {if $FriedmEnev.spectrum}
                            {if $FriedmEnevValue.spectrumFrom == 'A'}
                                <div class="FriedmEnev_spectrum">
                                {if $FriedmEnev.config.arrowIllustration == 'arrowOld'}
                                    {s name="spectrum" namespace="frontend/plugins/FriedmEnev"}Spektrum
                                        <br/>
                                    {/s}{$FriedmEnev.spectrumFrom} {s name="spectrumTo" namespace="frontend/plugins/FriedmEnev"}bis{/s} {$FriedmEnev.spectrum}
                                {else}
                                        {$FriedmEnev.spectrumFrom}
                                        <i class="icon--arrow-up5"></i>
                                        {$FriedmEnev.spectrum}
                                {/if}
                            </div>
                            {/if}
                        {/if}
                    </div>
                </div>
            </div>
            {if ($showDownload || $FriedmEnev.config.allviewsDatasheet) && strlen($FriedmEnev.download)}<div class="FriedmEnev_download"><a href="{$FriedmEnev.download}" target="_blank" title="{s name="produktdatenblatt" namespace="frontend/plugins/FriedmEnev"}Produktdatenblatt{/s}" class="FriedmEnev_datasheet">{s name="produktdatenblatt" namespace="frontend/plugins/FriedmEnev"}Produktdatenblatt{/s}</a></div>{/if}
        </div>
    {/if}
{/block}
