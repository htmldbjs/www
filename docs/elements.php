<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
    <meta name="keywords" content="HTML Data, Template Engine, Modeling, Code Generation, Semantic Web, Pyronome, Sanpark, Syntax, System Modeling">
    <meta name="description" content="HTMLDB.js is a simple HTML data & template engine written in pure JavaScript">
    <meta name="author" content="Sanpark">
    <meta property="og:title" content="A simple HTML data & template engine written in pure JavaScript!">
    <meta property="og:site_name" content="A simple HTML data & template engine written in pure JavaScript!" />
    <meta property="og:url" content="http://www.htmldbjs.org/">
    <meta property="og:image" content="http://www.htmldbjs.org/assets/img/logo-2x.png">
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="620" />
    <meta property="og:image:height" content="435" />
    <meta property="og:description" content="HTMLDB.js is a simple HTML data & template engine written in pure JavaScript.">

    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favfavicon-64x64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/fav/favicon-16x16.png">
	<link rel="manifest" href="../assets/img/fav/site.webmanifest">
	<link rel="mask-icon" href="../assets/img/fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">
    <link href="../assets/css/ionicons.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
    <title>HTMLDB.js</title>
</head>

<body>
    <?php include_once(__DIR__ . '/sidenav.php') ?>
    <main id="mainDocumentation" class="row noMargin">
        <!-- Content Start -->
        <div class="wrapper col s12">
            <section id="sectionGetStarted" data-linker="aGetStarted"><div class="container"><h1>Elements</h1></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-button-add</code></h3>
<p>An action button is used for adding a new record to the specified table. When <code>htmldb-button-add</code> button is clicked related forms are reset.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;button class="htmldb-button-add"
        type="button"
        data-htmldb-form="myForm"
        data-htmldb-form-defaults='{"enabled":1}'&gt;Add New Record&lt;/button&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-form</code></td>
<td>Specifies parent form, that new record will be entered.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-form-defaults</code></td>
<td>Specifies new record defaults in JSON format. This attribute value must be specified between <code>'</code> single quotation marks. Because, double quotation marks are required for the definition of JSON object properties.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbadd</code></td>
<td>Triggered when an htmldb-button-add button clicked.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-button-edit</code></h3>
<p>An action button is used for editing a specific record. When <code>htmldb-button-edit</code> button is clicked <code>htmldb-table</code> element's active id is set to the specified record. Additionally, all related form fields are populated with the values of the record.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;button class="htmldb-button-edit"
        type="button"
        data-htmldb-edit-id="1"
        data-htmldb-table="myTable"
        data-htmldb-form="myForm"&gt;Edit Record&lt;/button&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies parent table, that holds the record to be edited.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-form</code></td>
<td>Specifies the form, that will be populated with the record in <code>data-htmldb-table</code> table specified by <code>data-htmldb-edit-id</code> value.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-edit-id</code></td>
<td>Specifies the unique id value of the record to be edited.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<p>This element has no HTMLDB events.</p>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-button-refresh</code></h3>
<p>An action button is used for refreshing all <code>htmldb-table</code> elements.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;button class="htmldb-button-refresh"
        type="button"&gt;Refresh&lt;/button&gt;</code></pre>
<h4>Attributes</h4>
<p>This element has no HTMLDB attributes.</p>
<h4>Events</h4>
<p>This element has no HTMLDB events.</p>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-button-save</code></h3>
<p>An action button is used for saving current values of the specified form.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;button class="htmldb-button-save"
        type="button"
        data-htmldb-form="myForm"&gt;Save&lt;/button&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-form</code></td>
<td>Specifies the form, that holds the record to be saved.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-checkbox-group</code></td>
<td>HTMLDB provides multiple selection of records via checkbox groups. This attribute specifies the checkbox group will be used to identify selected records to be updated.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-form-defaults</code></td>
<td>Specifies default fields values to be assigned. This attribute value must be in JSON format, thus specified between <code>'</code> single quotation marks. Because, double quotation marks are required for the definition of JSON object properties.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbsave</code></td>
<td>Triggered when an htmldb-button-save button clicked.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-button-sort</code></h3>
<p>An action button is used for updating the sorting preferences.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;button type="button"
        class="htmldb-button-sort"
        data-htmldb-table="myTable"
        data-htmldb-sort-field="sortingColumn"
        data-htmldb-sort-value="0"
        data-htmldb-direction-field="sortingASC"
        data-htmldb-refresh-table="myTable2,myTable3"
        data-htmldb-table-defaults='{"page":0}'&gt;Sort Column&lt;/button&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies table, that holds the sorting configuration. When user clicks the <code>htmldb-button-sort</code> button, sorting configuration specified by <code>data-htmldb-sort-field</code>, <code>data-htmldb-sort-value</code> and <code>data-htmldb-direction-field</code> is saved to this table.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-sort-field</code></td>
<td>Specifies the sort field in the <code>data-htmldb-table</code> table.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-sort-value</code></td>
<td>Specifies the sort field value, that holds the column id, index or name to be saved when the user clicks this button.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-direction-field</code></td>
<td>Specifies the sort direction (Ascending or Descending) field in the <code>data-htmldb-table</code> table. Value of this field is automatically determined by the current state of this button. Additionally, an extra class is added according to the state of this button. If the sorting direction is ascending, <code>htmldb-sorting-asc</code> class is added. If the sorting direction is descending, <code>htmldb-sorting-desc</code> class is added.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-refresh-table</code></td>
<td>Specifies the table(s), that will refreshed after sorting configuration is saved. This attribute can hold more than one HTMLDB table seperating with comma <code>,</code> symbol.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-sorting-asc</code></td>
<td>Specifies the current sorting direction. If the sorting direction is ascending, the value of this attribute is <code>1</code>, otherwise the value of this attribute is <code>0</code>.<br><br><code>Default Value: "0"</code><br><code>Read-Only</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbsort</code></td>
<td>Triggered when an htmldb-button-sort button clicked.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-checkbox-group</code></h3>
<p>A container element for checkbox inputs. <code>htmldb-checkbox-group</code> makes it possible to select/update/delete multiple records.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;ul id="ulCheckboxGroup1" class="htmldb-checkbox-group" data-htmldb-table="myTable"&gt;

    &lt;li&gt;

        &lt;input id="checkboxAll"
                name="checkboxAll"
                type="checkbox"
                class="htmldb-checkbox-all"
                data-htmldb-checkbox-id="" /&gt;

    &lt;/li&gt;

    &lt;li&gt;

        &lt;input id="checkbox1"
                name="checkbox1"
                type="checkbox"
                class="htmldb-checkbox"
                data-htmldb-checkbox-id="1" /&gt;

    &lt;/li&gt;

    &lt;li&gt;

        &lt;input id="checkbox2"
                name="checkbox2"
                type="checkbox"
                class="htmldb-checkbox"
                data-htmldb-checkbox-id="2" /&gt;

    &lt;/li&gt;

    &lt;li&gt;

        &lt;input id="checkbox3"
                name="checkbox3"
                type="checkbox"
                class="htmldb-checkbox"
                data-htmldb-checkbox-id="3" /&gt;

    &lt;/li&gt;

&lt;/ul&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table. <br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the unique identifier of the checkbox group. <br><br><code>Default Value: ""</code><br><code>Required</code><br><code>Unique</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbclick</code></td>
<td>Triggered when a checkbox in the checkbox group is clicked.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<table>
<thead>
<tr>
<th>Variable Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>checkedCount</code></td>
<td>Gives the checked checkbox count in the checkbox group.<br><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>checkboxCount</code></td>
<td>Gives the total checkbox count in the checkbox group.<br><br><code>Read-Only</code></td>
</tr>
</tbody>
</table></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-error</code></h3>
<p>A container element for the errors.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;div class="htmldb-error"
        data-htmldb-table="myTable"&gt;&lt;/div&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table, whose errors will be printed in this element.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldberror</code></td>
<td>Triggered when an error returned especially after validation process.<br><br><code>Event.detail.tableElementId</code> holds the table id that returned the error.<br><code>Event.detail.errorText</code> holds the error text returned.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-field</code></h3>
<p>An input element, that holds the current values of the <code>htmldb-form</code> fields.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;form id="myForm"
        name="myForm"
        method="post"
        class="htmldb-form"
        data-htmldb-table="myTable"&gt;

    &lt;input id="name"
            name="name"
            type="text"
            value=""
            class="htmldb-field"
            data-htmldb-field="company_name"&gt;

&lt;/form&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-field</code></td>
<td>Specifies the field name. The parent table name is specified in the container form.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-value</code></td>
<td>Specifies the field value in mustache text notation (e.g. <code>{{id}}</code>, <code>{{name}}</code>).<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-reset-value</code></td>
<td>Specifies the value of the element, after container form is reset. This attribute accepts mustache text notation.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbsetvalue</code></td>
<td>Triggered when HTMLDB sets the htmldb-field input value.<br><br><code>Event.detail.value</code> holds the value has been set.</td>
</tr>
<tr>
<td><code>htmldbgetvalue</code></td>
<td>Triggered when HTMLDB is about to get the htmldb-field input value.</td>
</tr>
<tr>
<td><code>htmldbreset</code></td>
<td>Triggered when HTMLDB resets the htmldb-field element.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-form</code></h3>
<p>A container for the <code>htmldb-field</code> elements, that automatically updated by <code>htmldb-table</code>.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;form id="myForm"
        name="myForm"
        method="post"
        class="htmldb-form"
        data-htmldb-table="myTable"&gt;

&lt;/form&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table of the form.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbreset</code></td>
<td>Triggered when HTMLDB resets the htmldb-form form element.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-input-save</code></h3>
<p>A standalone input that automatically update the specific <code>htmldb-table</code> record.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;input id="name"
        name="name"
        class="htmldb-input-save"
        type="search"
        data-htmldb-edit-id=""
        data-htmldb-table="myTable"
        data-htmldb-input-field="company_name"
        data-htmldb-refresh-table="myTable2"
        data-htmldb-table-defaults='{"page":0}'
        data-htmldb-save-delay="1000"&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-edit-id</code></td>
<td>Specifies the unique id value of the record to be edited. This attribute value is not required. If not specified the active value of the specified table will be edited.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table, to be updated.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-save-delay</code></td>
<td>Specifies the delay time between update operations. This attribute is very useful when using <code>htmldb-input-save</code> with text inputs.<br><br><code>Default Value: "500"</code></td>
</tr>
<tr>
<td><code>data-htmldb-input-field</code></td>
<td>Specifies the field name in the <code>data-htmldb-table</code> to be updated.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-refresh-table</code></td>
<td>Specifies the table(s), that will refreshed after saving. This attribute can hold more than one HTMLDB table seperating with comma <code>,</code> symbol.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-table-defaults</code></td>
<td>Specifies extra fields to be updated. This attribute value must be in JSON format, thus specified between <code>'</code> single quotation marks. Because, double quotation marks are required for the definition of JSON object properties.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-checkbox-group</code></td>
<td>HTMLDB provides multiple selection of records via checkbox groups. This attribute specifies the checkbox group will be used to identify selected records to be updated.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbsave</code></td>
<td>Triggered when an htmldb-input-save input has been saved.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-message</code></h3>
<p>A container element for the messages.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;div class="htmldb-message"
        data-htmldb-table="myTable"&gt;&lt;/div&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table, whose messages will be printed in this element.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbmessage</code></td>
<td>Triggered when a message returned especially after validation process.<br><br><code>Event.detail.tableElementId</code> holds the table id that returned the message.<br><code>Event.detail.messageText</code> holds the message text returned.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-pagination</code></h3>
<p>A container element for easily navigating among the pages of <code>htmldb-table</code> element.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;ul class="htmldb-pagination"
        data-htmldb-table="myTable"
        data-htmldb-page-field="page"
        data-htmldb-page-count-field="pageCount"
        data-htmldb-refresh-table="myTable2"
        data-htmldb-table-defaults=""&gt;

    &lt;li class="htmldb-pagination-template htmldb-pagination-previous"&gt;

        &lt;button class="htmldb-button-page"&gt;Previous&lt;/button&gt;

    &lt;/li&gt;

    &lt;li class="htmldb-pagination-template htmldb-pagination-next"&gt;

        &lt;button class="htmldb-button-page"&gt;Next&lt;/button&gt;

    &lt;/li&gt;

    &lt;li class="htmldb-pagination-template htmldb-pagination-default"&gt;

        &lt;button class="htmldb-button-page"&gt;

            &lt;span data-htmldb-content="{{page}}"&gt;&lt;/span&gt;

        &lt;/button&gt;

    &lt;/li&gt;

    &lt;li class="htmldb-pagination-template htmldb-pagination-active"&gt;

        &lt;button class="htmldb-button-page"&gt;

            &lt;span data-htmldb-content="{{page}}"&gt;&lt;/span&gt;

        &lt;/button&gt;

    &lt;/li&gt;

    &lt;li class="htmldb-pagination-template htmldb-pagination-hidden"&gt;

        &lt;button class="htmldb-button-page" disabled="disabled"&gt;

            &lt;span&gt;...&lt;/span&gt;

        &lt;/button&gt;

    &lt;/li&gt;

&lt;/ul&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies table, that holds the pagination configuration. When user clicks the a page in <code>htmldb-pagination</code>, pagination configuration specified by <code>data-htmldb-page-field</code> is saved to this table.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-refresh-table</code></td>
<td>Specifies the table(s), that will refreshed after a page is clicked in <code>htmldb-pagination</code>  element. This attribute can hold more than one HTMLDB table seperating with comma <code>,</code> symbol.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-page-field</code></td>
<td>Specifies the field name that holds the current page index starting from <code>0</code>.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-page-count-field</code></td>
<td>Specifies the field name that holds page count.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-page</code></td>
<td>Specifies the current page index starting from <code>0</code>.<br><br><code>Default Value: ""</code><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>data-htmldb-page-count</code></td>
<td>Specifies the current page count.<br><br><code>Default Value: ""</code><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>data-htmldb-table-defaults</code></td>
<td>Specifies extra fields to be updated when a user clicks a page in <code>htmldb-pagination</code>. This attribute value must be in JSON format, thus specified between <code>'</code> single quotation marks. Because, double quotation marks are required for the definition of JSON object properties.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbrender</code></td>
<td>Triggered when an htmldb-pagination element has been rendered.</td>
</tr>
<tr>
<td><code>htmldbpageclick</code></td>
<td>Triggered when a page element clicked within an htmldb-pagination element.<br><br><code>Event.detail.page</code> holds the page index.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<table>
<thead>
<tr>
<th>Variable Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>page</code></td>
<td>Gives the current page index starting from <code>0</code>.<br><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>pageCount</code></td>
<td>Gives the current page count.<br><br><code>Read-Only</code></td>
</tr>
</tbody>
</table></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-section</code></h3>
<p>A container for the elements, that automatically rendered by the related <code>htmldb-table</code>.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;div class="htmldb-section" data-htmldb-table="myTable"&gt;

    &lt;p&gt;First Name:&lt;/p&gt;

    &lt;p data-htmldb-content="{{firstname}}"&gt;&lt;/p&gt;

    &lt;p&gt;Last Name:&lt;/p&gt;

    &lt;p data-htmldb-content="{{lastname}}"&gt;&lt;/p&gt;

    &lt;p&gt;E-mail Address:&lt;/p&gt;

    &lt;p data-htmldb-content="{{email}}"&gt;&lt;/p&gt;

&lt;/div&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table, that will automatically update the mustache text templates in the <code>htmldb-section</code> element.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-content</code></td>
<td>Specifies the mustache text template that will be copied into the inner HTML of the element in the <code>htmldb-section</code> element.<br><br><code>Default Value: ""</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<p>This element has no HTMLDB events.</p>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-select</code></h3>
<p>A select element that automatically populated with the related <code>htmldb-table</code>.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;select id="mySelect"
        name="mySelect"
        class="htmldb-select htmldb-field"
        data-htmldb-field="company_type"
        data-htmldb-option-table="companyTypes"
        data-htmldb-option-value="{{id}}"
        data-htmldb-option-title="{{company_type}}"&gt;&lt;/select&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-add-option-caption</code></td>
<td>Specifies the caption of the &quot;Add New...&quot; option. If this attribute value specified, a special option added as first option. When user clicks this option a new record form is initialized. <br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-add-option-form</code></td>
<td>Specifies the id of the new record form.<br><br><code>Default Value: ""</code><br><code>Required</code> when <code>data-htmldb-add-option-caption</code> is specified.</td>
</tr>
<tr>
<td><code>data-htmldb-add-option-form-defaults</code></td>
<td>Specifies new record form defaults in JSON format. This attribute value must be specified between <code>'</code> single quotation marks. Because, double quotation marks are required for the definition of JSON object properties.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-field</code></td>
<td>Specifies the field name. The parent table name is specified in the container form.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-option-table</code></td>
<td>Specifies the table that holds the options.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-option-title</code></td>
<td>Specifies the title field name of the options in the <code>data-htmldb-option-table</code>. This attribute accepts mustache text notation.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-option-value</code></td>
<td>Specifies the value field name of the options in the <code>data-htmldb-option-table</code>. This attribute accepts mustache text notation.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbsetoptions</code></td>
<td>Triggered when an htmldb-select element options has been set.</td>
</tr>
<tr>
<td><code>htmldbaddoptionclick</code></td>
<td>Triggered when add new option has been clicked.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-table-validation</code></h3>
<p>A container element for conditions validated locally before writing a record to <code>htmldb-table</code> element.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;ul class="htmldb-table-validation"
        data-htmldb-table="myTable"&gt;
    &lt;li data-htmldb-validation="firstname/is/''"&gt;Please specify your first name.&lt;/li&gt;
    &lt;li data-htmldb-validation="lastname/is/''"&gt;Please specify your last name.&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies table, to be validated according to the specified conditions. <code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-validation</code></td>
<td>Specifies the condition to be validated. If condition satisfied, message will be displayed as an error. Additionally, this attribute accepts mustache text notation.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Validation Syntax</h4>
<p>HTMLDB proposes an easy way to specify conditions as an attribute value. <code>/</code> symbol is used to seperate operators and operands. </p>
<p>Following examples show the usage of conditions:</p>
<ul>
<li><code>"deleted/eq/0/and/enabled/eq/1"</code></li>
<li><code>"customer_id/gt/0/or/supplier_id/gt/0"</code></li>
<li><code>"name/isnot/''"</code></li>
<li><code>"category/in/1,3,4"</code></li>
<li><code>"category/is/{{category_id}}"</code></li>
<li><code>"invoice_date/lt/{{:new Date().getTime();}}"</code></li>
</ul>
<h4>Validation Operators</h4>
<ul>
<li><code>is</code> or <code>eq</code> means &quot;equal to&quot;.</li>
<li><code>isnot</code> or <code>neq</code> means &quot;not equal to&quot;.</li>
<li><code>gt</code> means &quot;greater than&quot;.</li>
<li><code>gte</code> means &quot;greater than or equal to&quot;.</li>
<li><code>lt</code> means &quot;less than&quot;.</li>
<li><code>lte</code> means &quot;less than or equal to&quot;.</li>
<li><code>in</code> means &quot;in comma <code>,</code> seperated values&quot;.</li>
<li><code>notin</code> means &quot;not in comma <code>,</code> seperated values&quot;.</li>
</ul>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbvalidate</code></td>
<td>Triggered when a condition is about to be validated.</td>
</tr>
<tr>
<td><code>htmldberror</code></td>
<td>Triggered when an error about to be displayed.</td>
</tr>
<tr>
<td><code>htmldbsuccess</code></td>
<td>Trigger when validation is successful.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-table</code></h3>
<p>Data source element that retrieves and stores data from the server. Also, it validates and posts data to the server.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;div id="myFirstTable"
        class="htmldb-table"
        data-htmldb-read-url="myfirsttable/read"
        data-htmldb-validate-url="myfirsttable/validate"
        data-htmldb-write-url="myfirsttable/write"&gt;&lt;/div&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-filter</code></td>
<td>Specifies filter expression will be used while reading data from a parent HTMLDB table instance. This attribute is used with <code>data-htmldb-table</code>. Additionally, this attribute accepts mustache text notation.<br><br><code>Default Value: ""</code><br></td>
</tr>
<tr>
<td><code>data-htmldb-loader</code></td>
<td>Specifies the loader element id that will be shown on all read, validate and write operations.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-local</code></td>
<td>Specifies whether HTMLDB table instance will store data in browser's local storage (IndexedDB) or not. Local HTMLDB table instances are not automatically retreive data from the server or post data to the server. It stores all the data in IndexedDB. Local HTMLDB table instances use <code>HTMLDB</code> as database name and HTMLDB table element <code>id</code> for object store name. Local HTMLDB table data can be accessible from all pages in the same domain.<br><br><code>Default Value: "0"</code></td>
</tr>
<tr>
<td><code>data-htmldb-priority</code></td>
<td>Specifies the loading priority of the HTMLDB table.<br><br><code>Default Value: "0"</code></td>
</tr>
<tr>
<td><code>data-htmldb-read-loader</code></td>
<td>Specifies the loader element id that will be shown only on read operations.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-read-url</code></td>
<td>Specifies the URL of the data requested from the server.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-read-only</code></td>
<td>Specifies that HTMLDB table instance is read-only or not.<br><br><code>Default Value: "0"</code></td>
</tr>
<tr>
<td><code>data-htmldb-redirect</code></td>
<td>Specifies the redirect URL after posting data to the server.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent HTMLDB table <code>id</code>. This attribute is used with <code>data-htmldb-table</code>.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-validate-loader</code></td>
<td>Specifies the loader element id that will be shown only on validate operations.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-validate-url</code></td>
<td>Specifies the URL that simulates posting data to the server for validation.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-write-loader</code></td>
<td>Specifies the loader element id that will be shown only on write operations.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-form</code></td>
<td>Specifies the target form that will be updated after read operations.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-loading</code></td>
<td>Specifies the table is loading or not.<br><br><code>Default Value: ""</code><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>data-htmldb-active-id</code></td>
<td>Specifies the current id (like cursor) of the table. After loading/refreshing, active id is automatically reset to first id in the list.<br><br><code>Default Value: ""</code><br><code>Read-Only</code></td>
</tr>
<tr>
<td><code>data-htmldb-read-incremental</code></td>
<td>Specifies that read operations will be incremental or not. In incremental read operations, the table records are not cleared. All read operations are added at the end of the list.<br><br><code>Default Value: "0"</code></td>
</tr>
<tr>
<td><code>data-htmldb-write-url</code></td>
<td>Specifies the data post URL.<br><br><code>Default Value: ""</code></td>
</tr>
<tr>
<td><code>data-htmldb-write-only</code></td>
<td>Specifies that HTMLDB table instance is write-only or not.<br><br><code>Default Value: "0"</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the name of the HTMLDB table.<br><br><code>Default Value: ""</code><br><code>Required</code><br><code>Unique</code></td>
</tr>
</tbody>
</table>
<h4>Filter Syntax</h4>
<p>HTMLDB proposes an easy way to specify filters as an attribute value. <code>/</code> symbol is used to seperate operators and operands. </p>
<p>Following examples show the usage of filters:</p>
<ul>
<li><code>"deleted/eq/0/and/enabled/eq/1"</code></li>
<li><code>"customer_id/gt/0/or/supplier_id/gt/0"</code></li>
<li><code>"name/isnot/''"</code></li>
<li><code>"category/in/1,3,4"</code></li>
<li><code>"category/is/{{category_id}}"</code></li>
<li><code>"invoice_date/lt/{{:new Date().getTime();}}"</code></li>
</ul>
<h4>Filter Operators</h4>
<ul>
<li><code>is</code> or <code>eq</code> means &quot;equal to&quot;.</li>
<li><code>isnot</code> or <code>neq</code> means &quot;not equal to&quot;.</li>
<li><code>gt</code> means &quot;greater than&quot;.</li>
<li><code>gte</code> means &quot;greater than or equal to&quot;.</li>
<li><code>lt</code> means &quot;less than&quot;.</li>
<li><code>lte</code> means &quot;less than or equal to&quot;.</li>
<li><code>in</code> means &quot;in comma <code>,</code> seperated values&quot;.</li>
<li><code>notin</code> means &quot;not in comma <code>,</code> seperated values&quot;.</li>
</ul>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldberror</code></td>
<td>Triggered when an error returned especially after validation process.<br><br><code>Event.detail.errorText</code> holds the error text returned.</td>
</tr>
<tr>
<td><code>htmldbmessage</code></td>
<td>Triggered when a message returned especially after validation process.<br><br><code>Event.detail.messageText</code> holds the message text returned.</td>
</tr>
<tr>
<td><code>htmldbread</code></td>
<td>Triggered when table is readed.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>All the columns in the table, can be considered as HTMLDB variable.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-template</code></h3>
<p>A container element for the templates, that are automatically rendered by related <code>htmldb-table</code>.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;table id="myTemplateTarget"&gt;&lt;/table&gt;

&lt;script type="text/html"
        id="myTemplate"
        class="htmldb-template"
        data-htmldb-table="myTable"
        data-htmldb-template-target="myTemplateTarget"&gt;

        &lt;tr class="tr{{id}}" data-object-id="{{id}}"&gt;

            &lt;td&gt;{{id}}&lt;/td&gt;

            &lt;td&gt;{{company_name}}&lt;/td&gt;

            &lt;td&gt;{{company_type}}&lt;/td&gt;

        &lt;/tr&gt;

&lt;/script&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-table</code></td>
<td>Specifies the parent table, that will be used to render this template.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-template-target</code></td>
<td>Specifies the target element id, which will be populated after rendering this template. Additionally this attribute accepts table fields and element variables in mustache template notation.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>data-htmldb-filter</code></td>
<td>Specifies filter expression will be used while reading data from a parent HTMLDB table instance. Additionally, this attribute accepts mustache text notation.<br><br><code>Default Value: ""</code>.</td>
</tr>
</tbody>
</table>
<h4>Filter Syntax</h4>
<p>HTMLDB proposes an easy way to specify filters as an attribute value. <code>/</code> symbol is used to seperate operators and operands. </p>
<p>Following examples show the usage of filters:</p>
<ul>
<li><code>"deleted/eq/0/and/enabled/eq/1"</code></li>
<li><code>"customer_id/gt/0/or/supplier_id/gt/0"</code></li>
<li><code>"name/isnot/''"</code></li>
<li><code>"category/in/1,3,4"</code></li>
<li><code>"category/is/{{category_id}}"</code></li>
<li><code>"invoice_date/lt/{{:new Date().getTime();}}"</code></li>
</ul>
<h4>Filter Operators</h4>
<ul>
<li><code>is</code> or <code>eq</code> means &quot;equal to&quot;.</li>
<li><code>isnot</code> or <code>neq</code> means &quot;not equal to&quot;.</li>
<li><code>gt</code> means &quot;greater than&quot;.</li>
<li><code>gte</code> means &quot;greater than or equal to&quot;.</li>
<li><code>lt</code> means &quot;less than&quot;.</li>
<li><code>lte</code> means &quot;less than or equal to&quot;.</li>
<li><code>in</code> means &quot;in comma <code>,</code> seperated values&quot;.</li>
<li><code>notin</code> means &quot;not in comma <code>,</code> seperated values&quot;.</li>
</ul>
<h4>Events</h4>
<table>
<thead>
<tr>
<th>Event Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>htmldbrender</code></td>
<td>Triggered when an htmldb-template element has been rendered.<br><br><code>Event.detail.targets</code> holds the list of target elements rendered.</td>
</tr>
</tbody>
</table>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>htmldb-toggle</code></h3>
<p>A special container for the form fields that automatically displayed or hided for a certain condition.</p>
<h4>Syntax</h4>
<pre><code class="language-html">&lt;div id="myContainer"
        class="htmldb-toggle"
        data-htmldb-filter="company_type/eq/1"&gt;

    &lt;p&gt;Company Type: 1&lt;/p&gt;

&lt;/div&gt;</code></pre>
<h4>Attributes</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>data-htmldb-filter</code></td>
<td>Specifies the condition according to the values of the container form that make this element visible. Additionally, this attribute accepts mustache text notation.<br><br><code>Default Value: ""</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Filter Syntax</h4>
<p>HTMLDB proposes an easy way to specify filters as an attribute value. <code>/</code> symbol is used to seperate operators and operands. </p>
<p>Following examples show the usage of filters:</p>
<ul>
<li><code>"deleted/eq/0/and/enabled/eq/1"</code></li>
<li><code>"customer_id/gt/0/or/supplier_id/gt/0"</code></li>
<li><code>"name/isnot/''"</code></li>
<li><code>"category/in/1,3,4"</code></li>
<li><code>"category/is/{{category_id}}"</code></li>
<li><code>"invoice_date/lt/{{:new Date().getTime();}}"</code></li>
</ul>
<h4>Filter Operators</h4>
<ul>
<li><code>is</code> or <code>eq</code> means &quot;equal to&quot;.</li>
<li><code>isnot</code> or <code>neq</code> means &quot;not equal to&quot;.</li>
<li><code>gt</code> means &quot;greater than&quot;.</li>
<li><code>gte</code> means &quot;greater than or equal to&quot;.</li>
<li><code>lt</code> means &quot;less than&quot;.</li>
<li><code>lte</code> means &quot;less than or equal to&quot;.</li>
<li><code>in</code> means &quot;in comma <code>,</code> seperated values&quot;.</li>
<li><code>notin</code> means &quot;not in comma <code>,</code> seperated values&quot;.</li>
</ul>
<h4>Events</h4>
<p>This element has no HTMLDB events.</p>
<h4>Variables</h4>
<p>This element has no HTMLDB variables.</p></div><div class="divider"></div><p>&nbsp;</p></section>
        </div>
    </main>

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/documentation.js"></script>
</body>

</html>