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
            <section id="sectionGetStarted" data-linker="aGetStarted">

                <div class="container scrollspy" id="divUnderstandTheSystem">
                    <h1>Get Started</h1>
                    <h2>Installation</h2>

                    <p>
                        Installation HTMLDB is very simple. Just add src/htmldb.js or dist/htmldb.min.js in your HTML document. 
                        You don't need to initialize it with javascript. On the page load, HTMLDB automatically initializes itself.</p>
                    <table class="responsive-table highlight">
                        <thead>
                            <tr>
                                <th>File Description</th>
                                <th class="center-align">File Type</th>
                                <th class="center-align">File Size</th>
                                <th class="center-align">Last Update</th>
                                <th class="center-align"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>htmldb.js</td>
                                <td class="center-align">JS</td>
                                <td class="center-align">144 KB.</td>
                                <td class="center-align">Aug. 30, 2018</td>
                                <td class="center-align"><a href="downloads/htmldb.js" download="htmldb.js">Download</a></td>
                            </tr>
                            <tr>
                                <td>htmldb.min.js</td>
                                <td class="center-align">JS</td>
                                <td class="center-align">58 KB.</td>
                                <td class="center-align">Jul. 11, 2018</td>
                                <td class="center-align"><a href="downloads/htmldb.min.js" download="htmldb.min.js">Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <p></p>

<!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007020">&lt;!DOCTYPE html&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;html</span> <span style="color: #4070a0">lang=&quot;en&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;head&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;meta</span> <span style="color: #4070a0">charset=&quot;utf-8&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;title&gt;</span>My HTMLDB Page<span style="color: #062873; font-weight: bold">&lt;/title&gt;</span>
        <span style="color: #60a0b0; font-style: italic">&lt;!--</span>
        <span style="color: #60a0b0; font-style: italic">htmldb.min.js file location can change based on your directory structure.</span><span style="color: #60a0b0; font-style: italic">
        --&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/javascript&quot;</span> <span style="color: #4070a0">src=&quot;htmldb.min.js&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/script&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/head&gt;</span>

    <span style="color: #062873; font-weight: bold">&lt;body&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;/html&gt;</span></pre></div>  
                <p>&nbsp;</p>
                </div>

                <div class="container scrollspy" id="divDefineMainElements">
                    <h2>Usage</h2>
                    <p>Firstly, create an HTMLDB table. HTMLDB tables are like database tables, 
                        they have columns and rows. In this case we have a table to list our friends.</p>
                    <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007020">&lt;!DOCTYPE html&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;html</span> <span style="color: #4070a0">lang=&quot;en&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;head&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;meta</span> <span style="color: #4070a0">charset=&quot;utf-8&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;title&gt;</span>My HTMLDB Page<span style="color: #062873; font-weight: bold">&lt;/title&gt;</span>

        <span style="color: #062873; font-weight: bold">&lt;div</span> <span style="color: #4070a0">id=&quot;friendsHTMLDB&quot;</span> <span style="color: #4070a0">class=&quot;htmldb-table&quot;</span> <span style="color: #4070a0">data-htmldb-read-url=&quot;friends/read&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/div&gt;</span>

        <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/javascript&quot;</span> <span style="color: #4070a0">src=&quot;htmldb.min.js&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/script&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/head&gt;</span>

    <span style="color: #062873; font-weight: bold">&lt;body&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;/html&gt;</span>
</pre></div>

                    <p>In the above example, we use a container <code>&lt;div&gt;</code> element for storing server side data (e.g. friends) in HTML format. 
                        This <code>&lt;div&gt;</code> must have a unique id attribute. By using a special class name htmldb-table,
                        we specify this <code>&lt;div&gt;</code> as an HTMLDB table. Additionally, we use special attributes starting 
                        with data-htmldb- to define properties of HTMLDB elements. In this case we use data-htmldb-read-url for specifying
                        the source URL of HTMLDB table that friends data will be loaded.</p>

                    <p>Let's assume friends data (URL decoded) loaded from the server are as follows:</p>
                    <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">{
    <span style="color: #062873; font-weight: bold">&quot;c&quot;</span>: [
    <span style="color: #4070a0">&quot;id&quot;</span>, <span style="color: #4070a0">&quot;firstname&quot;</span>, <span style="color: #4070a0">&quot;lastname&quot;</span>
    ],
    <span style="color: #062873; font-weight: bold">&quot;r&quot;</span>: [
        [<span style="color: #4070a0">&quot;1&quot;</span>, <span style="color: #4070a0">&quot;Rachel&quot;</span>, <span style="color: #4070a0">&quot;Green&quot;</span>],
        [<span style="color: #4070a0">&quot;2&quot;</span>, <span style="color: #4070a0">&quot;Phoebe&quot;</span>, <span style="color: #4070a0">&quot;Buffay&quot;</span>],
        [<span style="color: #4070a0">&quot;3&quot;</span>, <span style="color: #4070a0">&quot;Monica&quot;</span>, <span style="color: #4070a0">&quot;Geller&quot;</span>],
        [<span style="color: #4070a0">&quot;4&quot;</span>, <span style="color: #4070a0">&quot;Chandler&quot;</span>, <span style="color: #4070a0">&quot;Bing&quot;</span>],
        [<span style="color: #4070a0">&quot;5&quot;</span>, <span style="color: #4070a0">&quot;Joey&quot;</span>, <span style="color: #4070a0">&quot;Tribbiani&quot;</span>],
        [<span style="color: #4070a0">&quot;6&quot;</span>, <span style="color: #4070a0">&quot;Ross&quot;</span>, <span style="color: #4070a0">&quot;Geller&quot;</span>]
    ]
}
</pre></div>

                    <p>Let's list our friends with a template.</p>
<!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007020">&lt;!DOCTYPE html&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;html</span> <span style="color: #4070a0">lang=&quot;en&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;head&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;meta</span> <span style="color: #4070a0">charset=&quot;utf-8&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;title&gt;</span>My HTMLDB Page<span style="color: #062873; font-weight: bold">&lt;/title&gt;</span>
    
        <span style="color: #062873; font-weight: bold">&lt;div</span> <span style="color: #4070a0">id=&quot;friendsHTMLDB&quot;</span> <span style="color: #4070a0">class=&quot;htmldb-table&quot;</span> <span style="color: #4070a0">data-htmldb-read-url=&quot;friends/read&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/div&gt;</span>
    
        <span style="color: #062873; font-weight: bold">&lt;table&gt;</span>
            <span style="color: #062873; font-weight: bold">&lt;thead&gt;</span>
                <span style="color: #062873; font-weight: bold">&lt;tr&gt;</span>
                    <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>ID<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
                    <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>First Name<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
                    <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>Last Name<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
                <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
            <span style="color: #062873; font-weight: bold">&lt;/thead&gt;</span>
            <span style="color: #062873; font-weight: bold">&lt;tbody</span> <span style="color: #4070a0">id=&quot;friendsList&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/tbody&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;/table&gt;</span>
    
        <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/html&quot;</span> <span style="color: #4070a0">id=&quot;friendsListTemplate&quot;</span> <span style="color: #4070a0">class=&quot;htmldb-template&quot;</span>
                <span style="color: #4070a0">data-htmldb-table=&quot;friendsHTMLDB&quot;</span> <span style="color: #4070a0">data-htmldb-template-target=&quot;friendsList&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
            <span style="color: #666666">&lt;</span>tr data<span style="color: #666666">-</span>row<span style="color: #666666">-</span>id<span style="color: #666666">=</span><span style="color: #4070a0">&quot;{{id}}&quot;</span><span style="color: #666666">&gt;</span>
                <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{id}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
                <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{firstname}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
                <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{lastname}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
            <span style="color: #666666">&lt;</span><span >/tr&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;/script&gt;</span>
    
        <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/javascript&quot;</span> <span style="color: #4070a0">src=&quot;htmldb.min.js&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/script&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/head&gt;</span>

    <span style="color: #062873; font-weight: bold">&lt;body&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/body&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;/html&gt;</span>
  </pre></div>

                <p>In the example above, there is a <code>&lt;table&gt;</code> with an empty <code>&lt;tbody&gt;</code> element. 
                    This empty <code>&lt;tbody&gt;</code> element will contain list of friends after the page load with the specified template. 
                    <code>&lt;tbody&gt;</code> element has an id attribute with the value <code>"friendsList"</code>.</p>
                
                <p>Additionally, there is a <code>&lt;script&gt;</code> element with <code>type="text/html"</code> attribute. 
                    This <code>&lt;script&gt;</code> element contains list template with mustache text fields.</p>
                
                <p>After loading page, this HTML will look like as the following:</p>
                <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007020">&lt;!DOCTYPE html&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;html</span> <span style="color: #4070a0">lang=&quot;en&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;head&gt;</span>
  <span style="color: #062873; font-weight: bold">&lt;meta</span> <span style="color: #4070a0">charset=&quot;utf-8&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
  <span style="color: #062873; font-weight: bold">&lt;title&gt;</span>My HTMLDB Page<span style="color: #062873; font-weight: bold">&lt;/title&gt;</span>

  <span style="color: #062873; font-weight: bold">&lt;div</span> <span style="color: #4070a0">id=&quot;friendsHTMLDB&quot;</span> <span style="color: #4070a0">class=&quot;htmldb-table&quot;</span> <span style="color: #4070a0">data-htmldb-read-url=&quot;friends/read&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
    <span style="color: #60a0b0; font-style: italic">&lt;!-- HTMLDB table runtime content --&gt;</span>
  <span style="color: #062873; font-weight: bold">&lt;/div&gt;</span>

  <span style="color: #062873; font-weight: bold">&lt;table&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;thead&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>ID<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>First Name<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;th&gt;</span>Last Name<span style="color: #062873; font-weight: bold">&lt;/th&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/thead&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;tbody</span> <span style="color: #4070a0">id=&quot;friendsList&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;1&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>1<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Rachel<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Green<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;2&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>2<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Phoebe<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Buffay<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;3&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>3<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Monica<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Geller<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;4&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>4<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Chandler<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Bing<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;5&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>5<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Joey<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Tribbiani<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;tr</span> <span style="color: #4070a0">data-row-id=&quot;6&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>6<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Ross<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
        <span style="color: #062873; font-weight: bold">&lt;td&gt;</span>Geller<span style="color: #062873; font-weight: bold">&lt;/td&gt;</span>
      <span style="color: #062873; font-weight: bold">&lt;/tr&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/tbody&gt;</span>
  <span style="color: #062873; font-weight: bold">&lt;/table&gt;</span>

  <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/html&quot;</span> <span style="color: #4070a0">id=&quot;friendsListTemplate&quot;</span> <span style="color: #4070a0">class=&quot;htmldb-template&quot;</span> <span style="color: #4070a0">data-htmldb-table=&quot;friendsHTMLDB&quot;</span> <span style="color: #4070a0">data-htmldb-template-target=&quot;friendsList&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
        <span style="color: #666666">&lt;</span>tr data<span style="color: #666666">-</span>row<span style="color: #666666">-</span>id<span style="color: #666666">=</span><span style="color: #4070a0">&quot;{{id}}&quot;</span><span style="color: #666666">&gt;</span>
            <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{id}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
            <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{firstname}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
            <span style="color: #666666">&lt;</span>td<span style="color: #666666">&gt;</span>{{lastname}}<span style="color: #666666">&lt;</span><span >/td&gt;</span>
        <span style="color: #666666">&lt;</span><span >/tr&gt;</span>
    <span style="color: #062873; font-weight: bold">&lt;/script&gt;</span>

  <span style="color: #062873; font-weight: bold">&lt;script </span><span style="color: #4070a0">type=&quot;text/javascript&quot;</span> <span style="color: #4070a0">src=&quot;htmldb.min.js&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/script&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;/head&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;body&gt;</span>
<span style="color: #062873; font-weight: bold">&lt;/body&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;/html&gt;</span>
</pre></div>

                <p>&nbsp;</p>
                </div>

                <div class="container scrollspy" id="divDefineMemberElements">
                    <h2>Backend Integration</h2>
                    <p>It is easy to integrate HTMLDB with your favorite backend framework.
                        HTMLDB requests data in JSON format and uses an inner form to post data to the server.</p>
                    
                    <h3>Request Format</h3>
                    <p>A typical HTMLDB request is a JSON string with the following format:</p>
                    <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">{
    <span style="color: #062873; font-weight: bold">&quot;c&quot;</span>: [
        <span style="color: #4070a0">&quot;id&quot;</span>, <span style="color: #4070a0">&quot;column0&quot;</span>, <span style="color: #4070a0">&quot;column1&quot;</span>, <span style="color: #4070a0">&quot;column2&quot;</span>, <span style="color: #4070a0">&quot;columnName&quot;</span>
    ],
    <span style="color: #062873; font-weight: bold">&quot;r&quot;</span>: [
        [<span style="color: #4070a0">&quot;1&quot;</span>, <span style="color: #4070a0">&quot;This is column0 value&quot;</span>, <span style="color: #4070a0">&quot;Column 1 Value&quot;</span>, <span style="color: #4070a0">&quot;Column 2 Value&quot;</span>, <span style="color: #4070a0">&quot;Last column value&quot;</span>],
        [<span style="color: #4070a0">&quot;2&quot;</span>, <span style="color: #4070a0">&quot;This is column0 value&quot;</span>, <span style="color: #4070a0">&quot;Column 1 Value&quot;</span>, <span style="color: #4070a0">&quot;Column 2 Value&quot;</span>, <span style="color: #4070a0">&quot;Last column value&quot;</span>],
        [<span style="color: #4070a0">&quot;3&quot;</span>, <span style="color: #4070a0">&quot;This is column0 value&quot;</span>, <span style="color: #4070a0">&quot;Column 1 Value&quot;</span>, <span style="color: #4070a0">&quot;Column 2 Value&quot;</span>, <span style="color: #4070a0">&quot;Last column value&quot;</span>]
    ]
}
</pre></div>


                    <p>Please note that data loaded from the server must be URL encoded. Raw data from the server will be as follows:</p>
                    <div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">
%7B%22c%22%3A%5B%22id%22%2C%22column0%22%2C%22column1%22%2C%22column2%22%2C%22columnName%22%5D%2C%22r%22%3A%5B%5B%221%22%2C%22This%20is%20column0%20value%22%2C%22Column%201%20Value%22%2C%22Column%202%20Value%22%2C%22Last%20column%20value%22%5D%2C%5B%222%22%2C%22This%20is%20column0%20value%22%2C%22Column%201%20Value%22%2C%22Column%202%20Value%22%2C%22Last%20column%20value%22%5D%2C%5B%223%22%2C%22This%20is%20column0%20value%22%2C%22Column%201%20Value%22%2C%22Column%202%20Value%22%2C%22Last%20column%20value%22%5D%5D%7D
</pre></div>
                    <p>HTMLDB uses <code>decodeURIComponent</code> function to decode URL encoded data.</p>
                    <h3>Response Format</h3>
                    <p>HTMLDB uses an inner HTML form element to post data to the server with the following format:</p>
                    <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span>htmldb_action</span><span>0</span><span>:</span> <span>inserted</span>
<span>htmldb_row</span><span>0</span><span>_id:</span> <span>1</span>
<span>htmldb_row</span><span>0</span><span>_column</span><span>0</span><span>:</span> <span>column</span><span>0</span> <span>new</span> <span>value</span>  
<span>htmldb_row</span><span>0</span><span>_column</span><span>1</span><span>:</span> <span>column</span><span>1</span> <span>new</span> <span>value</span>
<span>htmldb_row</span><span>0</span><span>_column</span><span>2</span><span>:</span> <span>column</span><span>2</span> <span>new</span> <span>value</span>
<span>htmldb_row</span><span>0</span><span>_columnName:</span> <span>columnName</span> <span>new</span> <span>value</span>
</pre></div>

                    <p>The above example shows single-row post parameters. For posting multiple rows the following format is used:</p>
                    <!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span >htmldb_action</span><span >0</span><span >:</span> <span >inserted</span>
<span >htmldb_row</span><span >0</span><span >_id:</span> <span >1</span>
<span >htmldb_row</span><span >0</span><span >_column</span><span >0</span><span >:</span> <span >column</span><span >0</span> <span >new</span> <span >value</span>  
<span >htmldb_row</span><span >0</span><span >_column</span><span >1</span><span >:</span> <span >column</span><span >1</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >0</span><span >_column</span><span >2</span><span >:</span> <span >column</span><span >2</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >0</span><span >_columnName:</span> <span >columnName</span> <span >new</span> <span >value</span>
<span >htmldb_action</span><span >1</span><span >:</span> <span >inserted</span>
<span >htmldb_row</span><span >1</span><span >_id:</span> <span >2</span>
<span >htmldb_row</span><span >1</span><span >_column</span><span >0</span><span >:</span> <span >column</span><span >0</span> <span >new</span> <span >value</span>  
<span >htmldb_row</span><span >1</span><span >_column</span><span >1</span><span >:</span> <span >column</span><span >1</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >1</span><span >_column</span><span >2</span><span >:</span> <span >column</span><span >2</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >1</span><span >_columnName:</span> <span >columnName</span> <span >new</span> <span >value</span>
<span >htmldb_action</span><span >2</span><span >:</span> <span >inserted</span>
<span >htmldb_row</span><span >2</span><span >_id:</span> <span >3</span>
<span >htmldb_row</span><span >2</span><span >_column</span><span >0</span><span >:</span> <span >column</span><span >0</span> <span >new</span> <span >value</span>  
<span >htmldb_row</span><span >2</span><span >_column</span><span >1</span><span >:</span> <span >column</span><span >1</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >2</span><span >_column</span><span >2</span><span >:</span> <span >column</span><span >2</span> <span >new</span> <span >value</span>
<span >htmldb_row</span><span >2</span><span >_columnName:</span> <span >columnName</span> <span >new</span> <span >value</span>
</pre></div>

                <p>&nbsp;</p>
                </div>

                <div class="container scrollspy" id="divElementTypeElementValue">
                    <h2>Elements</h2>
                    <table summary="Elements" class="tableOperator striped" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th>&nbsp</th>
                                <th scope="col" width="150px">Element Name</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-button-add</a></td>
                                <td>An action button is used for adding a new record to the specified table. When <code>htmldb-button-add</code>
                                    button is clicked related forms are reset.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-button-edit</a></td>
                                <td>An action button is used for editing a specific record. When <code>htmldb-button-edit</code> button is clicked 
                                    <code>htmldb-table</code> element's active id is set to the specified record.
                                    Additionally, all related form fields are populated with the values of the record.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-button-refresh</a></td>
                                <td>An action button is used for refreshing all <code>htmldb-table</code> elements.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-button-save</a></td>
                                <td>An action button is used for saving current values of the specified form.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-button-sort</a></td>
                                <td>An action button is used for updating the sorting preferences.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-checkbox-group</a></td>
                                <td>A container element for checkbox inputs. <code>htmldb-checkbox-group</code> makes it possible
                                    to select/update/delete multiple records.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-error</a></td>
                                <td>A container element for the errors.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-field</a></td>
                                <td>An input element, that holds the current values of the <code>htmldb-form</code> fields.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-form</a></td>
                                <td>A container for the <code>htmldb-field</code> elements, that automatically updated by <code>htmldb-table</code>.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-input-save</a></td>
                                <td>A standalone input that automatically update the specific <code>htmldb-table</code> record.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-message</a></td>
                                <td>A container element for the messages.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-pagination</a></td>
                                <td>A container element for easily navigating among the pages of <code>htmldb-table</code> element.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-section</a></td>
                                <td>A container for the elements, that automatically rendered by the related <code>htmldb-table</code>.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-select</a></td>
                                <td>A select element that automatically populated with the related <code>htmldb-table</code>.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-table</a></td>
                                <td>Data source element that retrieves and stores data from the server. Also, it validates and posts data to the server.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-table-validation</a></td>
                                <td>A container element for conditions validated locally before writing a record to <code>htmldb-table</code> element.</td>
                            </tr>
                            <tr class="trOdd">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-template</a></td>
                                <td>A container element for the templates, that are automatically rendered by related <code>htmldb-table</code>.</td>
                            </tr>
                            <tr class="trEven">
                                <td class="col1"></td>
                                <td><a href="#!">htmldb-toggle</a></td>
                                <td>A special container for the form fields that automatically displayed or hided for a certain condition.</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                </div>

                <div class="container scrollspy" id="divExtendElements">
                    <h2>Global Variables</h2>
                    <p>HTMLDB provides some critical information in global variables. This global variables can be used in mustache templates.</p>
                    <h3><code>$URL</code></h3>
                    <p><code>$URL</code> global variable holds the URL address of the current page. You can access URL parameters with <code>$URL.parameter</code> notation. 
                        Additionally <code>$URL</code> accepts integer parameter indices e.g. <code>$URL.1</code> or <code>$URL.-1</code>. 
                        <code>$URL.1</code> gives the first URL parameter value. 
                        <code>$URL.-1</code> gives the last URL parameter value.</p>
                    <p>&nbsp;</p>
                </div>
                <div class="container scrollspy" id="divDifferentStates">
                    <h2>Using Other Table Fields and Element Variables in Mustache Templates</h2>
                    <p>In some cases, it is required to use other table fields and/or element variables (e.g. current page index, page count, checked record count, etc.) 
                        in mustache templates. htmldb-table fields are accessible using <code>{{TableName.FieldName}}</code> notation, and also htmldb-pagination, 
                        <code>htmldb-checkbox-group</code> variables using <code>{{ElementID.VariableName}}</code> in mustache templates. 
                        HTMLDB uses active records of the htmldb-table instances while parsing mustache templates.</p>
<!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #062873; font-weight: bold">&lt;form</span> <span style="color: #4070a0">id=&quot;myForm&quot;</span>
    <span style="color: #4070a0">name=&quot;myForm&quot;</span>
    <span style="color: #4070a0">method=&quot;post&quot;</span>
    <span style="color: #4070a0">class=&quot;htmldb-form&quot;</span>
    <span style="color: #4070a0">data-htmldb-table=&quot;myTable&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;input</span> <span style="color: #4070a0">id=&quot;company_id&quot;</span>
        <span style="color: #4070a0">name=&quot;company_id&quot;</span>
        <span style="color: #4070a0">type=&quot;hidden&quot;</span>
        <span style="color: #4070a0">value=&quot;&quot;</span>
        <span style="color: #4070a0">class=&quot;htmldb-field&quot;</span>
        <span style="color: #4070a0">data-htmldb-field=&quot;company_id&quot;</span>
        <span style="color: #4070a0">data-htmldb-reset-value=&quot;{{companyTable.id}}&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;input</span> <span style="color: #4070a0">id=&quot;name&quot;</span>
        <span style="color: #4070a0">name=&quot;name&quot;</span>
        <span style="color: #4070a0">type=&quot;text&quot;</span>
        <span style="color: #4070a0">value=&quot;&quot;</span>
        <span style="color: #4070a0">class=&quot;htmldb-field&quot;</span>
        <span style="color: #4070a0">data-htmldb-field=&quot;company_name&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;/form&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;div</span> <span style="color: #4070a0">id=&quot;companyTable&quot;</span>
    <span style="color: #4070a0">class=&quot;htmldb-table&quot;</span>
    <span style="color: #4070a0">data-htmldb-read-url=&quot;company/read&quot;</span>
    <span style="color: #4070a0">data-htmldb-validate-url=&quot;company/validate&quot;</span>
    <span style="color: #4070a0">data-htmldb-write-url=&quot;company/write&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/div&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;div</span> <span style="color: #4070a0">id=&quot;myFirstTable&quot;</span>
    <span style="color: #4070a0">class=&quot;htmldb-table&quot;</span>
    <span style="color: #4070a0">data-htmldb-read-url=&quot;myfirsttable/read&quot;</span>
    <span style="color: #4070a0">data-htmldb-validate-url=&quot;myfirsttable/validate&quot;</span>
    <span style="color: #4070a0">data-htmldb-write-url=&quot;myfirsttable/write&quot;</span><span style="color: #062873; font-weight: bold">&gt;&lt;/div&gt;</span>
</pre></div>

                    <p>In the example above, there is a form and two <code>htmldb-table</code> instances called <code>companyTable</code> and <code>myFirstTable</code> respectively. 
                        Also, the form has two inputs. The first input is a hidden input that holds predefined <code>company_id</code> value from <code>companyTable</code>. 
                        In this case, <code>data-htmldb-reset-value</code> attribute must be specified with the value <code>{{companyTable.id}}</code>. 
                        So, <code>company_id</code> input value will be automatically reset to the id value of the active record in <code>companyTable</code> instance.</p>

                    <p>&nbsp;</p>
                </div>

                <div class="container scrollspy" id="">
                    <h2>Using Javascript Functions and Variables in Mustache Templates</h2>
                    <p>Using Javascript variables and functions in mustache templates can be a time-saver. 
                        It is very easy to use global Javascript functions and variables in HTMLDB mustache templates.</p>
<!-- HTML generated using hilite.me --><div class="codeHighlighter" style="background: #f0f0f0; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #062873; font-weight: bold">&lt;form</span> <span style="color: #4070a0">id=&quot;myForm&quot;</span>
    <span style="color: #4070a0">name=&quot;myForm&quot;</span>
    <span style="color: #4070a0">method=&quot;post&quot;</span>
    <span style="color: #4070a0">class=&quot;htmldb-form&quot;</span>
    <span style="color: #4070a0">data-htmldb-table=&quot;myTable&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;input</span> <span style="color: #4070a0">id=&quot;company_guid&quot;</span>
        <span style="color: #4070a0">name=&quot;company_guid&quot;</span>
        <span style="color: #4070a0">type=&quot;hidden&quot;</span>
        <span style="color: #4070a0">value=&quot;&quot;</span>
        <span style="color: #4070a0">class=&quot;htmldb-field&quot;</span>
        <span style="color: #4070a0">data-htmldb-field=&quot;company_guid&quot;</span>
        <span style="color: #4070a0">data-htmldb-reset-value=&quot;{{:generateCompanyGUID();}}&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;input</span> <span style="color: #4070a0">id=&quot;company_calculated_field&quot;</span>
        <span style="color: #4070a0">name=&quot;company_calculated_field&quot;</span>
        <span style="color: #4070a0">type=&quot;hidden&quot;</span>
        <span style="color: #4070a0">value=&quot;&quot;</span>
        <span style="color: #4070a0">class=&quot;htmldb-field&quot;</span>
        <span style="color: #4070a0">data-htmldb-field=&quot;company_calculated_field&quot;</span>
        <span style="color: #4070a0">data-htmldb-reset-value=&quot;{{:2+3;}}&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>

<span style="color: #062873; font-weight: bold">&lt;input</span> <span style="color: #4070a0">id=&quot;company_special_field&quot;</span>
        <span style="color: #4070a0">name=&quot;company_calculated_field&quot;</span>
        <span style="color: #4070a0">type=&quot;hidden&quot;</span>
        <span style="color: #4070a0">value=&quot;&quot;</span>
        <span style="color: #4070a0">class=&quot;htmldb-field&quot;</span>
        <span style="color: #4070a0">data-htmldb-field=&quot;company_calculated_field&quot;</span>
        <span style="color: #4070a0">data-htmldb-reset-value=&quot;{{:Math.sin(Math.PI / 2);}}&quot;</span><span style="color: #062873; font-weight: bold">&gt;</span>
</pre></div>

                </div>

                <div class="container scrollspy" id="">
                    <h2>Methods</h2>
                    <p>HTMLDB provides methods for accessing HTMLDB elements using JavaScript. You can click the following link to view HTMLDB methods.</p>
                    <p><a href="#!">List of HTMLDB Methods</a></p>
                    <p>&nbsp;</p>
                </div>
                
            </section>
        </div>
    </main>

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script src="../assets/js/documentation.js"></script>
</body>

</html>