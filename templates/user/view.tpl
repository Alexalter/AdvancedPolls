{gt text="View polls" assign=templatetitle}
{include file="user/menu.tpl"}
<h3>{$templatetitle}</h3>

{if $enablecategorization and $numproperties gt 0}
<form class="z-form" action="{modurl modname='AdvancedPolls' type='user' func='view'}" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset id="advanced_polls_multicategory_filter">
        <label for="advanced_polls_{$property}_category">{gt text="Category"}</label>
        {nocache}
        {if $numproperties gt 1}
        {html_options id="advanced_polls_property" name="advanced_polls_property" options=$properties selected=$property}
        {else}
        <input type="hidden" id="advanced_polls_property" name="advanced_polls_property" value="{$property}" />
        {/if}
        {foreach from=$catregistry key=prop item=cat}
        {assign var=propref value=$prop|string_format:'advanced_polls_%s_category'}
        {if $property eq $prop}
        {assign var="selectedValue" value=$category}
        {else}
        {assign var="selectedValue" value=0}
        {/if}
        <noscript>
            <div class="property_selector_noscript"><label for="{$propref}">{$prop}</label>:</div>
        </noscript>
        {selector_category category=$cat name=$propref selectedValue=$selectedValue allValue=0 __allText='Choose One' editLink=false}
        {/foreach}
        {/nocache}
        <input name="submit" type="submit" value="{gt text="Filter"}" />
        <input name="clear" type="submit" value="{gt text="Reset"}" />
    </fieldset>
</form>
{/if}

<h4>{gt text="Currently open polls"}</h4>
<table class="z-datatable">
    <thead>
        <tr>
            <th>{gt text="Poll title"}</th>
            <th>{gt text="Poll close date"}</th>
            {if $enablecategorization}
            <th>{gt text="Category"}</th>
            {/if}
            <th class="z-nowrap">{gt text="Options"}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$activepolls item=poll}
        <tr class="{cycle values="z-odd,z-even"}">
            <td><a href="{modurl modname="advancedpolls" type="user" func="display" pollid=$poll.pollid}">{$poll.title|safehtml}</a></td>
            <td>
                {if $poll.closedate}
                {$poll.closedate|dateformat:datetimebrief}
                {else}
                {gt text="No close date"}
                {/if}
            </td>
            {if $enablecategorization}
            <td>
                {foreach from=$poll.__CATEGORIES__ name=cat item=cat}
                {array_field assign="catname" array=$cat.display_name field=$lang returnValue=1}
                {if $catname eq ''}{assign var="catname" value=$cat.name}{/if}
                {$catname}
                {if !$smarty.foreach.cat.last}<br />{/if}
                {/foreach}
            </td>
            {/if}
            <td>
                {assign var="options" value=$poll.options}
                {section name=options loop=$options}
                <a href="{$options[options].url|safetext}">{img modname='core' set='icons/extrasmall' src=$options[options].image title=$options[options].title alt=$options[options].title}</a>
                {/section}
            </td>
        </tr>
        {foreachelse}
        <tr class="z-datatableempty"><td colspan="{if $enablecategorization}4{else}3{/if}">{gt text="No polls found."}</td></tr>
        {/foreach}
    </tbody>
</table>

<h4>{gt text="Upcoming polls"}</h4>
<table class="z-datatable">
    <thead>
        <tr>
            <th>{gt text="Poll title"}</th>
            <th>{gt text="Poll open date"}</th>
            {if $enablecategorization}
            <th>{gt text="Category"}</th>
            {/if}
            <th class="z-nowrap">{gt text="Options"}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$futurepolls item=poll}
        <tr class="{cycle values="z-odd,z-even"}">
            <td><a href="{modurl modname="AdvancedPolls" type="user" func="display" pollid=$poll.pollid}">{$poll.title|safehtml}</a></td>
            <td>{$poll.opendate|dateformat:datetimebrief}</td>
            {if $enablecategorization}
            <td>
                {foreach from=$poll.__CATEGORIES__ name=cat item=cat}
                {array_field assign="catname" array=$cat.display_name field=$lang returnValue=1}
                {if $catname eq ''}{assign var="catname" value=$cat.name}{/if}
                {$catname}
                {if !$smarty.foreach.cat.last}<br />{/if}
                {/foreach}
            </td>
            {/if}
            <td>
                {assign var="options" value=$poll.options}
                {section name=options loop=$options}
                <a href="{$options[options].url|safetext}">{img modname='core' set='icons/extraextrasmall' src=$options[options].image title=$options[options].title alt=$options[options].title}</a>
                {/section}
            </td>
        </tr>
        {foreachelse}
        <tr class="z-datatableempty"><td colspan="{if $enablecategorization}4{else}3{/if}">{gt text="No polls found."}</td></tr>
        {/foreach}
    </tbody>
</table>

<h4>{gt text="Previous polls"}</h4>
<table class="z-datatable">
    <thead>
        <tr>
            <th>{gt text="Poll title"}</th>
            <th>{gt text="Poll close date"}</th>
            {if $enablecategorization}
            <th>{gt text="Category"}</th>
            {/if}
            <th class="z-nowrap">{gt text="Options"}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$closedpolls item=poll}
        <tr class="{cycle values="z-odd,z-even"}">
            <td><a href="{modurl modname="AdvancedPolls" type="user" func="display" pollid=$poll.pollid}">{$poll.title|safehtml}</a></td>
            <td>{$poll.opendate|dateformat:datetimebrief}</td>
            {if $enablecategorization}
            <td>
                {foreach from=$poll.__CATEGORIES__ name=cat item=cat}
                {array_field assign="catname" array=$cat.display_name field=$lang returnValue=1}
                {if $catname eq ''}{assign var="catname" value=$cat.name}{/if}
                {$catname}
                {if !$smarty.foreach.cat.last}<br />{/if}
                {/foreach}
            </td>
            {/if}
            <td>
                {assign var="options" value=$poll.options}
                {section name=options loop=$options}
                <a href="{$options[options].url|safetext}">{img modname='core' set='icons/extrasmall' src=$options[options].image title=$options[options].title alt=$options[options].title}</a>
                {/section}
            </td>
        </tr>
        {foreachelse}
        <tr class="z-datatableempty"><td colspan="{if $enablecategorization}4{else}3{/if}">{gt text="No polls found."}</td></tr>
        {/foreach}
    </tbody>
</table>
