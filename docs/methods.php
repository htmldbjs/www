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
            <section id="sectionGetStarted" data-linker="aGetStarted"><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.addLeadingZeros</code></h3>
<p>This method adds zeros at the beginning of a given <code>text</code> to construct a string with the length of <code>digitCount</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.addLeadingZeros(text, digitCount)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>digitCount</code></td>
<td>Length of the final string.<br><br><code>Accepts: Integer</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.addSingleQuoteSlashes</code></h3>
<p>This method adds <code>\</code> characters in front of all single quote <code>'</code> characters within the given <code>text</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.addSingleQuoteSlashes(text)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.addSlashes</code></h3>
<p>This method adds <code>\</code> characters in front of all single quote <code>'</code> and double quote <code>"</code> characters within the given <code>text</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.addSlashes(text)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.callReadQueueCallbacks</code></h3>
<p>This method calls all the callback functions after reading the htmldb-table element given with <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.callReadQueueCallbacks(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose callback functions will be called. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.canWriteTable</code></h3>
<p>This method checks whether an update or insert operation is made or not. All the records that has been updated and inserted stored in a different table called writer tables.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.canWriteTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be checked. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if at least one record inserted or updated within the given <code>tableElement</code>. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.checkIfIndexedDBTableExists</code></h3>
<p>This method checks indexedDB object store has been created for the given <code>tableElement</code> or not.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.checkIfIndexedDBTableExists(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be checked. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the indexedDB object store exists for the <code>tableElement</code>. Otherwise return <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.checkTableValidation</code></h3>
<p>This method validates <code>tableElement</code>, for the given <code>object</code>, using <code>validationElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.checkTableValidation(tableElement, object, validationElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be checked. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object that will be validated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>validationElement</code></td>
<td>Specifies the <code>htmldb-table-validation</code> element will be used for validation.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the <code>object</code> is validated with the given <code>validationElement</code>. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.clearLocalTable</code></h3>
<p>This method clears all the records stored in the indexedDB object store for the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.clearLocalTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose indexedDB object stores will be cleared. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.clearReaderTable</code></h3>
<p>This method clears all the records stored in the reader table within the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.clearReaderTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose readers (a container for data read from the server or source table) will be cleared. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.clearWriterTable</code></h3>
<p>This method clears all the records stored in the writer table within the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.clearWriterTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose writers (a container for data to be post to the server) will be cleared. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.clonePaginationElement</code></h3>
<p>This method clones pagination item <code>element</code> for the given <code>page</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.clonePaginationElement(element, page)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the pagination item will be cloned.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>page</code></td>
<td>Specifies the page as an integer value.<br><br><code>Accepts: Integer</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.convertFormToObject</code></h3>
<p>This method converts <code>htmldb-field</code> elements within the <code>form</code> to a key-value associated JavaScript object.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.convertFormToObject(form, defaultObject)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>form</code></td>
<td>Specifies the <code>htmldb-form</code> element, that contains <code>htmldb-field</code> elements, will be converted.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>defaultObject</code></td>
<td>Specifies the default <code>htmldb-field</code> values as a JavaScript key-value associated object.<br><br><code>Accepts: Object</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns constructed JavaScript object based on <code>htmldb-field</code> element values.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.convertListRowToObject</code></h3>
<p>This method converts data, retreived from the server, to a key-value associated JavaScript object.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.convertListRowToObject(listRow, columns)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>listRow</code></td>
<td>Specifies the data retreived from the server.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>columns</code></td>
<td>Specifies the columns that will be used to extract values from <code>listRow</code>.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns constructed JavaScript object.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.convertRowToObject</code></h3>
<p>This method converts data, stored in the reader table, to a key-value associated JavaScript object.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.convertRowToObject(tableElement, row)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the <code>row</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>row</code></td>
<td>Specifies the row element that holds data to be converted.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns constructed JavaScript object.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.createHelperElements</code></h3>
<p>This method creates HTMLDB helper elements during initialization process.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.createHelperElements(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.createNewIframeAndForm</code></h3>
<p>This method creates new HTMLDB <code>IFRAME</code> (for GET operations) and <code>FORM</code> (for POST operations) for the specific <code>tableElement</code>. For each GET and POST operation HTMLDB creates new instances of <code>IFRAME</code> and <code>FORM</code> elements. This makes it possible to make multiple GET/POST operations on a single <code>htmldb-table</code> element.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.createNewIframeAndForm(tableElement, guid)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>guid</code></td>
<td>Specifies the unique identifier will be used while creating the new <code>IFRAME</code> and <code>FORM</code> instances.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.createPaginationElements</code></h3>
<p>This method creates inner elements of the <code>htmldb-pagination</code> element.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.createPaginationElements(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the container element for <code>htmldb-pagination</code> inner elements.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.delete</code></h3>
<p>This method deletes the record specified by <code>id</code> from <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.delete(tableElement, id, className)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that holds the record will be deleted. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the <code>id</code> value of the record that will be deleted.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>className</code></td>
<td>Specifies the extra class name will be used to mark deleted record.<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.deleteMarkedRows</code></h3>
<p>This method deletes the rows from the <code>parent</code> that contains the class specified by <code>className</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.deleteMarkedRows(parent, className)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the element whose rows will be deleted.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>className</code></td>
<td>Specifies the class name will be used to choose rows to be deleted.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doActiveFormFieldUpdate</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doActiveFormFieldUpdate(input, field)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>input</code></td>
<td>Specifies the updated <code>input</code> element.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>field</code></td>
<td>Specifies the field name.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doAddButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doAddButtonClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doAddOptionClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doAddOptionClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doCheckboxClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doCheckboxClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doEditButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doEditButtonClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doIndexedDBUpgradeNeeded</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doIndexedDBUpgradeNeeded()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doPaginationButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doPaginationButtonClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doParentElementToggle</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doParentElementToggle(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doReaderIframeDefaultLoad</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doReaderIframeDefaultLoad(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doReaderIframeLoad</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doReaderIframeLoad(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doRefreshButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doRefreshButtonClick()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSaveButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSaveButtonClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSaveInputEvent</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSaveInputEvent(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSaveInputEventNow</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSaveInputEventNow(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSaveInputKeyUp</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSaveInputKeyUp(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSelectChange</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSelectChange(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doSortButtonClick</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doSortButtonClick(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doTableWrite</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doTableWrite(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the written records. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doValidatorIframeLoad</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doValidatorIframeLoad(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.doWriterIframeLoad</code></h3>
<p>This method is an event handler for the events triggered by inner operations.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.doWriterIframeLoad(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.e</code></h3>
<p>This method is an alias for <code>document.getElementById</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.e(elementId)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>elementId</code></td>
<td>Element id to be used to call document.getElementById function.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns DOM element if the element specified by <code>elementId</code> is found, returns <code>undefined</code> otherwise.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.escapeJSONString</code></h3>
<p>This method modifies the special characters in <code>text</code>, so that it can be used in JSON.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.escapeJSONString(text)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.evaluateHTMLDBExpression</code></h3>
<p>This method calculates the values and replaces mustache templates (between <code>{{</code> and <code>}}</code>) and returns the modified string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.evaluateHTMLDBExpression(expression, parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>expression</code></td>
<td>Specifies the expression contains mustache templates.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parent</code></td>
<td>Specifies the parent <code>htmldb-table</code> or <code>htmldb-form</code>. If not specified mustache templates are calculated based on global values.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.evaluateHTMLDBExpressionWithObject</code></h3>
<p>This method calculates the values and replaces mustache templates (between <code>{{</code> and <code>}}</code>) based on given <code>object</code> and returns the modified string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.evaluateHTMLDBExpressionWithObject(expression, object)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>expression</code></td>
<td>Specifies the expression contains mustache templates.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the key-value associated JavaScript object that will be used as a source while calculating the values of mustache templates.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.evaluateHTMLDBGlobalObject</code></h3>
<p>This method calculates the values and replaces mustache templates (between <code>{{</code> and <code>}}</code>) of the global objects (eg. $URL) and returns the modified string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.evaluateHTMLDBGlobalObject(globalObject, parameter)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>globalObject</code></td>
<td>Specifies the global object as string.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parameter</code></td>
<td>Specifies the global object parameter as string.<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.evaluateHTMLDBJSCode</code></h3>
<p>This method calculates the values and replaces mustache templates (between <code>{{:</code> and <code>}}</code>) based on JavaScript expression and returns the modified string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.evaluateHTMLDBJSCode(code)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>code</code></td>
<td>Specifies the code that contains JavaScript expression.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.exploreHTMLDBCheckboxGroup</code></h3>
<p>This method finds container <code>htmldb-checkbox-group</code> element for the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.exploreHTMLDBCheckboxGroup(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the <code>element</code> whose container will be explored.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns found container element or <code>false</code> in failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.exploreHTMLDBForm</code></h3>
<p>This method finds container <code>htmldb-form</code> element for the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.exploreHTMLDBForm(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the <code>element</code> whose container will be explored.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns found container element or <code>false</code> in failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.exploreHTMLDBPagination</code></h3>
<p>This method finds container <code>htmldb-pagination</code> element for the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.exploreHTMLDBPagination(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the <code>element</code> whose container will be explored.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns found container element or <code>false</code> in failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.exploreHTMLDBTable</code></h3>
<p>This method finds container <code>htmldb-table</code> element for the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.exploreHTMLDBTable(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the <code>element</code> whose container will be explored.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns found container element or <code>false</code> in failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.extractChildTables</code></h3>
<p>This method returns all parent and child tables in an array.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.extractChildTables()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns all parent and child tables in an array.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.extractFormToggleFields</code></h3>
<p>This method returns an array listing <code>htmldb-field</code> names that is used in <code>filter</code> string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.extractFormToggleFields(filter, parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>filter</code></td>
<td>Specifies the filter expression contains mustache templates.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element whose fields will be explored.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns an array listing <code>htmldb-field</code> names that is used in <code>filter</code> string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.extractHTMLDBExpressionTables</code></h3>
<p>This method returns an array listing <code>htmldb-table</code> names that is used in <code>expression</code> string.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.extractHTMLDBExpressionTables(expression)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>expression</code></td>
<td>Specifies the expression that contains mustache templates.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns an array listing <code>htmldb-table</code> names that is used in <code>expression</code> string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.extractParentTables</code></h3>
<p>This method returns all child and parent tables in an array. This method returns the inverse value that returned from <code>HTMLDB.extractChildTables</code> method.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.extractParentTables()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns all child and parent tables in an array.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.extractToggleParentElement</code></h3>
<p>This method returns container <code>htmldb-section</code> or <code>htmldb-form</code> element for the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.extractToggleParentElement(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the toggle element whose container element will be returned.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns container <code>htmldb-section</code> or <code>htmldb-form</code> element for the given <code>element</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateDateTimeGUID</code></h3>
<p>This method generates unique identification string based on integer value of current time (eg. &quot;1534970823983154&quot;).</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateDateTimeGUID(prefix)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>prefix</code></td>
<td>Specifies the prefix to be used at the beginning of the GUID.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated GUID as string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateFilterFunctionBlock</code></h3>
<p>This method generates filter function body for the given <code>filter</code> and <code>parent</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateFilterFunctionBlock(filter, parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>filter</code></td>
<td>Specifies the filter text (in format &quot;deleted/eq/0/and/enabled/eq/1&quot;) that will be used to generate function body.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parent</code></td>
<td>Specifies the parent element.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated function body according to the <code>filter</code> value.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateFormHTML</code></h3>
<p>This method generates <code>FORM</code> content for posting values to the server for the given <code>tableElement</code> and <code>row</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateFormHTML(tableElement, iframeFormGUID, row)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the <code>row</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>iframeFormGUID</code></td>
<td>Specifies the unique id for the <code>FORM</code>.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>row</code></td>
<td>Specifies the row element whose <code>FORM</code> will be generated.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated <code>FORM</code> content.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateGUID</code></h3>
<p>This method generates unique identification string (eg. &quot;2018822234943a876497&quot;).</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateGUID(prefix)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>prefix</code></td>
<td>Specifies the prefix to be used at the beginning of the GUID.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated GUID as string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateTDHTML</code></h3>
<p>This method generates <code>TR</code> content for the given <code>tableElement</code> and <code>object</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateTDHTML(tableElement, prefix, object, id)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose table row contents will be generated. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>prefix</code></td>
<td>Specifies prefix &quot;reader&quot; or &quot;writer&quot;.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object whose HTML code will be generated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the id of the <code>TR</code>.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated <code>TR</code> content.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateTableFilterFunctionString</code></h3>
<p>This method generates filter function body for the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateTableFilterFunctionString(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose filter function will be generated. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated function body.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.generateTemplateRenderFunctionString</code></h3>
<p>This method generates function body for the templates for given <code>templateElement</code>, <code>tableElementId</code> and <code>targetElementId</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.generateTemplateRenderFunctionString(templateElement, tableElementId, targetElementId)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>templateElement</code></td>
<td>Specifies the template element whose render function will be generated.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>tableElementId</code></td>
<td>Specifies the <code>id</code> attribute value of the <code>htmldb-table</code> element that will be used as data source for the <code>templateElement</code>.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>targetElementId</code></td>
<td>Specifies target element <code>id</code> attribute value. Additionally this attribute accepts mustache text notation.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns generated function body.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.get</code></h3>
<p>This method gets the record specified by <code>id</code> from <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.get(tableElement, id)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the record will be get. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the id of the record to be retreived.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the record in an JavaScript object specified by <code>id</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getActiveId</code></h3>
<p>This method returns the active <code>id</code> of the given <code>tableElement</code>. HTMLDB uses active <code>id</code> values as a table cursor. When a table data retreived from the server, active <code>id</code> is set to the first <code>id</code> value. If an <code>htmldb-table</code> element value is set to another value, all related elements (<code>htmldb-table</code>, <code>htmldb-form</code>, <code>htmldb-template</code> and etc.) will be updated respectively.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getActiveId(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose active id will be returned. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the active <code>id</code> of the <code>tableElement</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getColumnNames</code></h3>
<p>This method returns columns names in an array for the given <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getColumnNames(tableElement, sortColumns)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the columns will be returned. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>sortColumns</code></td>
<td>Specifies whether columns names retreived will be sorted alphabetically or not.<br><br><code>Accepts: Boolean</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns column names in an array.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getEventTarget</code></h3>
<p>This method gets the event target element.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getEventTarget(event)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>event</code></td>
<td>Specifies event object that contains the event details from the event handler.<br><br><code>Accepts: Event Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns event target element.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getFormFieldActiveValue</code></h3>
<p>This method gets the current value of the <code>field</code> of the given <code>formElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getFormFieldActiveValue(formElement, field)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>formElement</code></td>
<td>Specifies the container <code>FORM</code> element.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>field</code></td>
<td>Specifies the field name.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the current value of the <code>field</code> in the <code>formElement</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getHTMLDBParameter</code></h3>
<p>This method gets the HTMLDB element attribute value.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getHTMLDBParameter(element, parameter)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element whose attribute value specified by <code>parameter</code> will be returned.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parameter</code></td>
<td>Specifies the attribute name.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the HTMLDB element attribute value.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getInputValue</code></h3>
<p>This method gets the current value of the given <code>input</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getInputValue(input)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>input</code></td>
<td>Specifies INPUT, SELECT, TEXTAREA and etc. element whose value will be returned.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the current value of the given <code>input</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getMaxPriority</code></h3>
<p>This method gets maximum priority value of the given <code>tableIds</code>. HTMLDB uses an integer value starting from zero to determine the load order of the <code>htmldb-table</code> elements within an HTML page. This method calculates the maximum priority value of the given <code>tableIds</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getMaxPriority(tableIds)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableIds</code></td>
<td>Specifies table <code>id</code>s in an array.<br><br><code>Accepts: Array</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the priority value.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getSelectNewOptionValue</code></h3>
<p>This method returns the option value of &quot;Add New&quot; option.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getSelectNewOptionValue(select)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>select</code></td>
<td>Specifies SELECT element whose option value will be returned.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the option value.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getTableFieldActiveValue</code></h3>
<p>This method gets the current value of the <code>column</code> of the given <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getTableFieldActiveValue(tableElement, column)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the data will be returned. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>column</code></td>
<td>Specifies the column name.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns the current value of the <code>column</code> in the <code>tableElement</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.getURLParameter</code></h3>
<p>This method splits current page url using <code>/</code> character and returns the part specified by <code>index</code>. This method is used by $URL global variable.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.getURLParameter(index)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>index</code></td>
<td>Specifies the index of the URL part to be returned.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method splits current page URL using <code>/</code> character and returns the part specified by <code>index</code>. </p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.hasHTMLDBParameter</code></h3>
<p>This method checks whether HTMLDB element has an attribute value specified by <code>parameter</code> or not.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.hasHTMLDBParameter(element, parameter)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element whose attribute value will be checked.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parameter</code></td>
<td>Specifies the name of the attribute.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the given <code>element</code> has an attribute value specified by <code>parameter</code>. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.hasLocalTable</code></h3>
<p>This method checks whether there is a local <code>htmldb-table</code> element or not within the current page.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.hasLocalTable()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns <code>true</code> if there is at least one local <code>htmldb-table</code> element within the current page. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.hideLoader</code></h3>
<p>This method hides the loader of the <code>tableElement</code> with the <code>type</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.hideLoader(tableElement, type)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose loader will be hidden. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>type</code></td>
<td>Specifies the type of the loader (eg. &quot;read&quot;, &quot;write&quot; or &quot;validate&quot;).<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.hideLoaders</code></h3>
<p>This method hides all the loaders within the current page.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.hideLoaders()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initialize</code></h3>
<p>This method initializes all HTMLDB elements within the current page.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initialize()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBAddButtons</code></h3>
<p>This method initializes <code>htmldb-button-add</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBAddButtons(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBButtons</code></h3>
<p>This method initializes <code>htmldb-button-add</code>, <code>htmldb-button-edit</code>, <code>htmldb-button-refresh</code>, <code>htmldb-button-save</code> and <code>htmldb-button-sort</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBButtons(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBEditButtons</code></h3>
<p>This method initializes <code>htmldb-button-edit</code> elements within <code>parent</code> related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBEditButtons(parent, tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that is related to the edit buttons will be initialized. If this parameter specified, only the edit buttons related to this <code>htmldb-table</code> element will be initialized. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBFormFields</code></h3>
<p>This method initializes <code>htmldb-field</code> elements within the given <code>formElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBFormFields(formElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>formElement</code></td>
<td>Specifies the container FORM element.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBFormTables</code></h3>
<p>This method initializes <code>htmldb-table</code> elements triggered with FORM elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBFormTables()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBForms</code></h3>
<p>This method initializes <code>htmldb-form</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBForms()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBIndexedDB</code></h3>
<p>This method initializes indexedDB and creates all the object stores required.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBIndexedDB(functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the callback function will be called after initialization process.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBInputs</code></h3>
<p>This method initializes <code>htmldb-input-save</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBInputs(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBPaginations</code></h3>
<p>This method initializes <code>htmldb-pagination</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBPaginations(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBRefreshButtons</code></h3>
<p>This method initializes <code>htmldb-button-refresh</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBRefreshButtons(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBSaveButtons</code></h3>
<p>This method initializes <code>htmldb-button-save</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBSaveButtons(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBSaveInputs</code></h3>
<p>This method initializes <code>htmldb-input-save</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBSaveInputs(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBSections</code></h3>
<p>This method initializes <code>htmldb-section</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBSections()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBSelects</code></h3>
<p>This method initializes <code>htmldb-select</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBSelects()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBSortButtons</code></h3>
<p>This method initializes <code>htmldb-button-sort</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBSortButtons(parent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies the container element. If not specified, document.body is used for <code>parent</code> parameter.<br><br><code>Accepts: DOM Element</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBTables</code></h3>
<p>This method initializes <code>htmldb-table</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBTables()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBTemplates</code></h3>
<p>This method initializes <code>htmldb-template</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBTemplates()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeHTMLDBToggles</code></h3>
<p>This method initializes <code>htmldb-toggle</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeHTMLDBToggles()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeLocalTable</code></h3>
<p>This method initializes indexedDB object stores for the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeLocalTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the tables and data that will be stored in browser's indexedDB database. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeLocalTableRows</code></h3>
<p>This method reads data from indexedDB object store for the given <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeLocalTableRows(tableElement, tablePrefix, result)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the table rows and data that will be stored in browser's indexedDB database. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>tablePrefix</code></td>
<td>Specifies table prefix (eg. &quot;reader&quot; or &quot;writer&quot;).<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>result</code></td>
<td>Specifies the result object from indexedDB object store.<br><br><code>Accepts: IndexedDB Result</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.initializeReadQueue</code></h3>
<p>This method initializes global read queue.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.initializeReadQueue()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.insert</code></h3>
<p>This method inserts record specified by <code>object</code> into <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.insert(tableElement, object, className)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that will contain the record will be inserted. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object to be inserted.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>className</code></td>
<td>Specifies the extra class name will be used to mark inserted record.<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isHTMLDBParameter</code></h3>
<p>This method checks whether HTMLDB element has an attribute with the value of &quot;true&quot; or &quot;1&quot;.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isHTMLDBParameter(element, parameter)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element whose attribute value will be checked.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parameter</code></td>
<td>Specifies the name of the attribute.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the attribute value specified by <code>parameter</code> is &quot;true&quot; or &quot;1&quot;. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isIdle</code></h3>
<p>This method checks whether there is an <code>htmldb-table</code> element in loading mode or not within the current page.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isIdle()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns <code>true</code>, if all <code>htmldb-table</code> elements are not in loading mode. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isInReadQueue</code></h3>
<p>This method checks whether <code>tableElement</code> is in read queue or not.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isInReadQueue(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that will be checked whether it is in the read queue or not. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if <code>tableElement</code> is in read queue. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isLetter</code></h3>
<p>This method checks whether the given <code>text</code> is an alphanumeric character (letter) or not.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isLetter(text)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be checked.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the given <code>text</code> is letter. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isLoading</code></h3>
<p>This method checks whether there is an <code>htmldb-table</code> element in loading mode or not within the current page.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isLoading()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns <code>true</code>, if at least one <code>htmldb-table</code> element is in loading mode. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isNewObject</code></h3>
<p>This method checks whether the given <code>object</code> is new or not.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isNewObject(object)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>object</code></td>
<td>Specifies the text to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the <code>object</code> is new. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.isNumeric</code></h3>
<p>This method checks whether the given <code>text</code> is numeric (letter) or not.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.isNumeric(text)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>text</code></td>
<td>Specifies the text to be checked.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the given <code>text</code> is numeric. Otherwise returns <code>false</code>.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.markRows</code></h3>
<p>This method adds the given <code>className</code> to the rows in the <code>parent</code> table.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.markRows(parent, className)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>parent</code></td>
<td>Specifies parent table whose rows will be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>className</code></td>
<td>Specifies the class name to be added.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.parseObjectDefaults</code></h3>
<p>This method parses given JSON string <code>defaults</code> into <code>object</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.parseObjectDefaults(object, defaults)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>object</code></td>
<td>Specifies the JavaScript object to be modified.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>defaults</code></td>
<td>Specifies the JSON string that will be parsed.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns modified object.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.processReadQueue</code></h3>
<p>This method makes read operations according to current <code>htmldb-table</code> priority.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.processReadQueue()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.q</code></h3>
<p>This method is an alias for <code>document.body.querySelectorAll</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.q(selector)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>selector</code></td>
<td>CSS selector to be used to query elements in DOM.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns DOM element node list specified by <code>selector</code>. It returns empty node list, if nothing is found.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.read</code></h3>
<p>This method reads records from server/indexedDB or parent table and populates <code>htmldb-table</code> element specified by <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.read(tableElement, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be read. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;read&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if the read operation has been successfully initiated, returns <code>false</code> otherwise.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.readChildTable</code></h3>
<p>This method reads records from parent table and populates <code>htmldb-table</code> element specified by <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.readChildTable(tableElement, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be read. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;read&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if child table succesfully read, returns <code>false</code> if an error occurs.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.readLocal</code></h3>
<p>This method reads records from related indexedDB object store and populates <code>htmldb-table</code> element specified by <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.readLocal(tableElement, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be read locally from the corresponding indexedDB object store. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;read&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> if local table succesfully read, returns <code>false</code> if an error occurs.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.registerFormElementEvent</code></h3>
<p>This method attaches suitable event (eg. input, change, click) according to the form input specified by <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.registerFormElementEvent(element, functionEvent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the target element.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionEvent</code></td>
<td>Specifies the function to be called on event.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.registerFormToggleEvents</code></h3>
<p>This method finds and attaches suitable toggle events to the <code>form</code> elements.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.registerFormToggleEvents(form)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>form</code></td>
<td>Specifies container form element that holds elements to be modified.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.removeFromReadingQueue</code></h3>
<p>This method removes <code>tableElement</code> from reading queue.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.removeFromReadingQueue(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element will be removed from the reading queue. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.removeIframeAndForm</code></h3>
<p>This method removes HTMLDB <code>IFRAME</code> (for GET operations) and <code>FORM</code> (for POST operations) for the specific <code>tableElement</code>. For each GET and POST operation HTMLDB creates new instances of <code>IFRAME</code> and <code>FORM</code> elements. This makes it possible to make multiple GET/POST operations on a single <code>htmldb-table</code> element. These elements are removed after completing GET/POST operation.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.removeIframeAndForm(tableElement, guid)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element contains the iframe (for getting data from the server) and the form (for posting data to the server) specified by the <code>guid</code>. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>guid</code></td>
<td>Specifies the unique identifier will be used while removing the <code>IFRAME</code> and <code>FORM</code> instances.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.removePaginationElements</code></h3>
<p>This method removes <code>htmldb-pagination-element</code> elements from the container <code>element</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.removePaginationElements(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the container element whose <code>htmldb-pagination-element</code> elements will be removed.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.removeReadQueueCallbacks</code></h3>
<p>This method clears all read queue callback functions.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.removeReadQueueCallbacks()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.render</code></h3>
<p>This method renders all related elements (eg. <code>htmldb-form</code>, <code>htmldb-section</code>, <code>htmldb-template</code>, <code>htmldb-pagination</code>) of <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.render(tableElement, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose visible data elements (eg. <code>htmldb-section</code>, <code>htmldb-template</code>, <code>htmldb-form</code>) will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;render&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderCheckboxGroup</code></h3>
<p>This method renders the given <code>checkboxGroup</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderCheckboxGroup(checkboxGroup)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>checkboxGroup</code></td>
<td>Specifies the <code>htmldb-table</code> element whose checkbox group will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderCheckboxGroups</code></h3>
<p>This method renders all <code>htmldb-checkbox-group</code> elements related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderCheckboxGroups(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose checkbox groups will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderElementWithObject</code></h3>
<p>This method renders container <code>element</code> and child elements that have attributes and contents including mustache templates with the given <code>object</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderElementWithObject(element, object)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies container element that will be rendered.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the source object whose values will be used while rendering.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderFormElement</code></h3>
<p>This method renders all <code>form</code> inputs with the given <code>object</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderFormElement(form, object)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>form</code></td>
<td>Specifies container form whose input elements will be rendered.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the source object whose values will be used while rendering.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderForms</code></h3>
<p>This method renders all the forms related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderForms(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose form elements will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderPaginationElement</code></h3>
<p>This method renders a specific <code>htmldb-pagination</code> element with the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderPaginationElement(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the container <code>htmldb-pagination</code> element whose child elements will be rendered.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderPaginations</code></h3>
<p>This method renders all <code>htmldb-pagination</code> elements related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderPaginations(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose pagination elements will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderSectionElement</code></h3>
<p>This method renders a specific <code>htmldb-section</code> element with the given <code>element</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderSectionElement(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the container <code>htmldb-section</code> element whose child elements will be rendered.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderSections</code></h3>
<p>This method renders all <code>htmldb-section</code> elements related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderSections(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose section elements will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderSelectElement</code></h3>
<p>This method renders a specific <code>htmldb-select</code> element with the given <code>select</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderSelectElement(select)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>select</code></td>
<td>Specifies the container <code>htmldb-select</code> element that will be rendered.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderSelects</code></h3>
<p>This method renders all <code>htmldb-select</code> elements related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderSelects(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose select elements will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.renderTemplates</code></h3>
<p>This method renders all <code>htmldb-template</code> elements related to <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.renderTemplates(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose template elements will be rendered. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.resetForm</code></h3>
<p>This method resets the given <code>form</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.resetForm(form)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>form</code></td>
<td>Specifies the container <code>FORM</code> element whose child elements will be reset.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.resetWriterLoop</code></h3>
<p>This method resets or initializes HTMLDB writer loop. HTMLDB periodically checks all <code>htmldb-table</code> elements if there is an insert/update and/or delete operation. If there is an insert/update and/or delete operation <code>HTMLDB.write</code> method is called for each <code>htmldb-table</code> element.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.resetWriterLoop()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns the modified string.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.setActiveId</code></h3>
<p>This method sets the active <code>id</code> of the given <code>tableElement</code>. HTMLDB uses active <code>id</code> values as a table cursor. When a table data retreived from the server, active <code>id</code> is set to the first <code>id</code> value. If an <code>htmldb-table</code> element value is set to another value, all related elements (<code>htmldb-table</code>, <code>htmldb-form</code>, <code>htmldb-template</code> and etc.) will be updated respectively.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.setActiveId(tableElement, id, silent)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose active id will be set. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the <code>id</code> value to be set.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>silent</code></td>
<td>Specifies that after setting the active <code>id</code>, related elements will be updated or not. If <code>silent=true</code>, none of the related elements will be updated. If <code>silent=undefined</code> (not satisfied) or <code>silent=false</code>, all related elements will be updated.<br><br><code>Accepts: Boolean</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.setColumnNames</code></h3>
<p>This method sets columns names using the <code>object</code> for the given <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.setColumnNames(tableElement, object)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose column names will be set. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the source object that will be used to extract column names.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.setInputValue</code></h3>
<p>This method assigns the <code>value</code> to the given <code>input</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.setInputValue(input, value)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>input</code></td>
<td>Specifies the input whose value will be modified.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>value</code></td>
<td>Specifies the value to be assigned.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.showError</code></h3>
<p>This method triggers <code>htmldbonerror</code> event for the <code>tableElement</code> with the <code>errorText</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.showError(tableElement, errorText)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the target <code>htmldb-table</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>errorText</code></td>
<td>Specifies the error text.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.showLoader</code></h3>
<p>This method shows the loader of the <code>tableElement</code> with the <code>type</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.showLoader(tableElement, type)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies <code>htmldb-table</code> element whose loader will be shown. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>type</code></td>
<td>Specifies the type of the loader (eg. &quot;read&quot;, &quot;write&quot; or &quot;validate&quot;).<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.showMessage</code></h3>
<p>This method triggers <code>htmldbonmessage</code> event for the <code>tableElement</code> with the <code>errorText</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.showMessage(tableElement, messageText)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the target <code>htmldb-table</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>errorText</code></td>
<td>Specifies the message text.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.stop</code></h3>
<p>This method stops the <code>tableElement</code> loading operations and hide related loaders immediately.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.stop(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose loading operations will be stopped. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.storeSectionElementTemplates</code></h3>
<p>This method stores initial attribute values and contents of the given <code>element</code> for future use.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.storeSectionElementTemplates(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element whose attribute values and contents and child values will be stored.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.update</code></h3>
<p>This method updates the record specified by <code>id</code> in the <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.update(tableElement, id, object, className)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the record will be updated. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies the <code>id</code> of the record to be updated.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object that contains new values.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>className</code></td>
<td>Specifies the extra class name will be used to mark updated record.<br><br><code>Accepts: String</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateLocal</code></h3>
<p>This method updates indexedDB object store of the given <code>tableElement</code> with the given <code>object</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateLocal(tableElement, id, object, updateOnlyReaderTable)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the record will be updated locally. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>id</code></td>
<td>Specifies <code>id</code> of the record to be modified.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object to be updated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>updateOnlyReaderTable</code></td>
<td>Specifies whether only reader table will be updated or not.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateReadQueue</code></h3>
<p>This method adds <code>tableElement</code> and its child elements in the read queue.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateReadQueue(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that will be added to read queue. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateReadQueueByParentTable</code></h3>
<p>This method adds child elements of the <code>tableElement</code> in the read queue.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateReadQueueByParentTable(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose child tables will be added to read queue. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateReadQueueCallbacks</code></h3>
<p>This method adds a callback function for the <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateReadQueueCallbacks(tableElement, callbackFunction)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>callbackFunction</code></td>
<td>Specifies the function will be called after reading <code>tableElement</code>.<br><br><code>Accepts: Function</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateReadQueueWithParameter</code></h3>
<p>This method adds htmldb-table elements with the given <code>element</code> and <code>parameter</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateReadQueueWithParameter(element, parameter)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element whose <code>parameter</code> value will be used.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>parameter</code></td>
<td>Specifies the attribute name of the <code>element</code> that will be used.<br><br><code>Accepts: String</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.updateTableFilterFunction</code></h3>
<p>This method re-generates the filter function of htmldb-table element specified by <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.updateTableFilterFunction(tableElement)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element whose filter functions will be updated. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validate</code></h3>
<p>This method validates the record specified by <code>object</code> to be inserted or updated in the <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validate(tableElement, object, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the records will be validated. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object to be validated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing the &quot;validate&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validateHTMLDBPaginationDefinition</code></h3>
<p>This method validates the definition of given <code>element</code> as an <code>htmldb-pagination</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validateHTMLDBPaginationDefinition(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element to be validated.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validateHTMLDBTableDefinition</code></h3>
<p>This method validates the definition of given <code>element</code> as an <code>htmldb-table</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validateHTMLDBTableDefinition(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element to be validated.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validateHTMLDBTemplateDefinition</code></h3>
<p>This method validates the definition of given <code>element</code> as an <code>htmldb-template</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validateHTMLDBTemplateDefinition(element)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>element</code></td>
<td>Specifies the element to be validated.<br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>true</code> on success, and returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validateLocal</code></h3>
<p>This method validates the record locally specified by <code>object</code> to be inserted or updated in the <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validateLocal(tableElement, object, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the records will be validated locally. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object to be validated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;validate&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns nothing.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.validateRemote</code></h3>
<p>This method validates the record remotely specified by <code>object</code> to be inserted or updated in the <code>tableElement</code>.</p>
<p>Please note that this method is used for inner operations, there is no need to call directly.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.validateRemote(tableElement, object, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the records will be validated remotely. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>object</code></td>
<td>Specifies the object to be validated.<br><br><code>Accepts: Object</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;validate&quot; operation.<br><br><code>Accepts: Function</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.write</code></h3>
<p>This method writes records to server of the <code>htmldb-table</code> element specified by <code>tableElement</code>.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.write(tableElement, delayed, functionDone)</code></pre>
<h4>Parameters</h4>
<table>
<thead>
<tr>
<th>Attribute Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tableElement</code></td>
<td>Specifies the <code>htmldb-table</code> element that contains the records will be written. This parameter accepts any DOM element from <code>document.getElementById</code> or <code>HTMLDB.e</code><br><br><code>Accepts: DOM Element</code><br><code>Required</code></td>
</tr>
<tr>
<td><code>delayed</code></td>
<td>Specifies that &quot;write&quot; operation will be delayed or not. This parameter value important while updating large number of recods. If <code>delayed=true</code> &quot;write&quot; operation is not POST values to the server one by one.<br><br><code>Default Value: ""</code><br><code>Optional</code></td>
</tr>
<tr>
<td><code>functionDone</code></td>
<td>Specifies the function to be called after completing &quot;write&quot; operation.<br><br><code>Accepts: Function</code><br><code>Optional</code></td>
</tr>
</tbody>
</table>
<h4>Returns</h4>
<p>This method returns <code>false</code> on failure.</p></div><div class="container scrollspy" id="divUnderstandTheSystem"><h3><code>HTMLDB.writeTables</code></h3>
<p>This method checks all <code>htmldb-table</code> elements for inserted/updated and deleted records and then, writes all updated records to the server.</p>
<h4>Description</h4>
<pre><code class="language-javascript">HTMLDB.writeTables()</code></pre>
<h4>Parameters</h4>
<p>This method has no parameters.</p>
<h4>Returns</h4>
<p>This method returns nothing.</p></div></section>
        </div>
    </main>

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/documentation.js"></script>
</body>

</html>