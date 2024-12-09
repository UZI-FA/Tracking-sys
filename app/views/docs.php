<html>
<head>
    <title>Quickstart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #8B0000;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .login-btn {
            background-color: #FF4500;
            border: none;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .sidebar {
            width: 250px;
            background-color: #f5f5f5;
            padding: 20px;
            position: fixed;
            height: 100%;
            overflow-y: auto;
        }
        .sidebar input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .sidebar h3, .sidebar h4 {
            margin-top: 0;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .content h1 {
            font-size: 2em;
            margin-top: 0;
        }
        .content .chart-types {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .content .chart-types button {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .content .chart-types button.active {
            background-color: #FF4500;
            color: white;
        }
        .content .setup-section, .content .import-data-section {
            margin-bottom: 20px;
        }
        .content .setup-section h2, .content .import-data-section h2 {
            font-size: 1.5em;
            margin-top: 0;
        }
        .content .setup-section .tabs, .content .import-data-section .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
        .content .setup-section .tabs button, .content .import-data-section .tabs button {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .content .setup-section .tabs button.active, .content .import-data-section .tabs button.active {
            background-color: #FF4500;
            color: white;
        }
        .content .code-block {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            position: relative;
        }
        .content .code-block .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ccc;
            border: none;
            padding: 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .content .code-block pre {
            margin: 0;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .content .footer {
            text-align: right;
            font-size: 0.8em;
            color: #888;
        }
        .content .footer a {
            color: #888;
            text-decoration: none;
        }
        .content .footer a:hover {
            text-decoration: underline;
        }
        .content .tips, .content .play-on-observable, .content .related-links {
            margin-top: 20px;
        }
        .content .tips h3, .content .play-on-observable h3, .content .related-links h3 {
            font-size: 1.2em;
            margin-top: 0;
        }
        .content .tips p, .content .play-on-observable p, .content .related-links p {
            margin: 0;
        }
        .content .tips ul, .content .play-on-observable ul, .content .related-links ul {
            list-style: none;
            padding: 0;
        }
        .content .tips ul li, .content .play-on-observable ul li, .content .related-links ul li {
            margin-bottom: 10px;
        }
        .content .tips ul li a, .content .play-on-observable ul li a, .content .related-links ul li a {
            text-decoration: none;
            color: #333;
        }
        .content .tips ul li a:hover, .content .play-on-observable ul li a:hover, .content .related-links ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div>Navbar</div>
        <button class="login-btn">Login</button>
    </div>
    <div class="sidebar">
        <input type="text" placeholder="Search">
        <h3>GETTING STARTED</h3>
        <ul>
            <li><a href="#">Introduction</a></li>
            <li><a href="#">Quickstart</a></li>
            <li><a href="#">Set up</a></li>
            <li><a href="#">Import data</a></li>
            <li><a href="#">Layout</a></li>
            <li><a href="#">Style data</a></li>
            <li><a href="#">Add tooltips</a></li>
            <li><a href="#">Resources</a></li>
        </ul>
        <h3>MAIN CONCEPTS</h3>
        <ul>
            <li><a href="#">Selections</a></li>
            <li><a href="#">Dynamic properties</a></li>
            <li><a href="#">Transformation</a></li>
            <li><a href="#">Animations</a></li>
        </ul>
        <h3>API REFERENCE V.5.12.0</h3>
        <ul>
            <li><a href="#">Arrays</a></li>
            <li><a href="#">Axes</a></li>
            <li><a href="#">Brushes</a></li>
            <li><a href="#">Chords</a></li>
            <li><a href="#">Collections</a></li>
            <li><a href="#">Colors</a></li>
            <li><a href="#">Color Schemes</a></li>
            <li><a href="#">Contours</a></li>
            <li><a href="#">Dispatches</a></li>
            <li><a href="#">Dragging</a></li>
            <li><a href="#">Delimiter-Separated Values</a></li>
            <li><a href="#">Easings</a></li>
            <li><a href="#">Fetches</a></li>
            <li><a href="#">Forces</a></li>
            <li><a href="#">Number Formats</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Quickstart</h1>
        <p>Select a chart type and get started:</p>
        <div class="chart-types">
            <button class="active"><i class="fas fa-chart-bar"></i> BAR CHART</button>
            <button><i class="fas fa-chart-line"></i> LINE CHART</button>
            <button><i class="fas fa-chart-scatter"></i> SCATTER PLOT</button>
            <button><i class="fas fa-chart-pie"></i> BUBBLE MAP</button>
        </div>
        <div class="setup-section">
            <h2>Set up</h2>
            <div class="tabs">
                <button class="active">ES2015 IMPORT</button>
                <button>DOWNLOAD</button>
                <button>LINK DIRECTLY</button>
            </div>
            <div class="code-block">
                <button class="copy-btn"><i class="fas fa-copy"></i></button>
                <pre>npm install d3</pre>
            </div>
            <div class="code-block">
                <button class="copy-btn"><i class="fas fa-copy"></i></button>
                <pre>import {scaleLinear} from "d3-scale";
import * as d3 from "d3";</pre>
            </div>
            <div class="code-block">
                <button class="copy-btn"><i class="fas fa-copy"></i></button>
                <pre>var d3 = require("d3");</pre>
            </div>
            <div class="footer">
                Download <a href="#">d3 version (5.12.0)</a>. View <a href="#">source code</a> or the <a href="#">changelog</a> on Github.
            </div>
        </div>
        <div class="import-data-section">
            <h2>Import data</h2>
            <p>This chart shows the relative frequency of letters in the English language. This is a vertical bar chart, also known as a column chart. Compare to a horizontal bar chart.</p>
            <div class="code-block">
                <button class="copy-btn"><i class="fas fa-copy"></i></button>
                <pre>data = (await d3.csv("https://gist.githubusercontent.com/mbostock/8faa27912ad9db5e177016797a780b2c/raw/3a807e0cbbf5904a53ca19edf765e2f87a2f5/alphabet.csv", ({letter, frequency}) => ({name: letter, value: +frequency}))).sort((a, b) => b.value - a.value)</pre>
            </div>
            <div class="footer">
                <a href="#">Play on Observable</a>
            </div>
        </div>
        <div class="tips">
            <h3>Fetch data and parse data</h3>
            <p>d3.fetch is one of the convenience methods on top of the Fetch API. It gets a comma-separated values (CSV) file.</p>
        </div>
        <div class="play-on-observable">
            <h3>Play on Observable</h3>
            <p>This icon indicates there's a related Observable notebook. This can link to the notebook or a specific cell.</p>
        </div>
        <div class="related-links">
            <h3>Related links and references</h3>
            <ul>
                <li><a href="#">JSON: incididunt ut labore et dolore magna aliqua.</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
<html>
 <head>
  <title>
   Layout Example
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .section p {
            font-size: 16px;
            line-height: 1.5;
        }
        .section .numbered {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .section .numbered .number {
            background-color: #ff6f61;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .section .numbered p {
            margin: 0;
        }
        .code-block {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            overflow-x: auto;
        }
        .sidebar {
            position: absolute;
            right: 20px;
            top: 20px;
            width: 200px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
        }
        .sidebar p {
            margin: 0 0 10px 0;
        }
        .sidebar a {
            color: #ff6f61;
            text-decoration: none;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .chart {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .chart img {
            max-width: 100%;
            height: auto;
        }
  </style>
 </head>
 <body>
  <div class="container">
   <div class="section">
    <div class="numbered">
     <div class="number">
      2
     </div>
     <p>
      Row conversion
     </p>
    </div>
    <p>
     If a row conversion function is not specified, field values are strings. For safety, there is no automatic conversion to numbers, dates, or other types.
    </p>
   </div>
   <div class="section">
    <div class="numbered">
     <div class="number">
      3
     </div>
     <p>
      Sort data
     </p>
    </div>
    <p>
     sort
     <span style="color: #ff6f61;">
      data
     </span>
     ed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    </p>
   </div>
   <div class="section">
    <h2>
     Layout
    </h2>
    <p>
     This chart shows the relative frequency of letters in the English language. This is a vertical bar chart, also known as a column chart. Compare to a horizontal bar chart.
    </p>
    <div class="numbered">
     <div class="number">
      1
     </div>
     <p>
      Width and height
     </p>
    </div>
    <p>
     x, y
     <span style="color: #ff6f61;">
      empora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
     </span>
    </p>
    <div class="numbered">
     <div class="number">
      2
     </div>
     <p>
      Margins
     </p>
    </div>
    <p>
     You
     <span style="color: #ff6f61;">
      idunt ut labore et top, bottom, left, right
     </span>
     empora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    </p>
    <div class="numbered">
     <div class="number">
      3
     </div>
     <p>
      Axes and reference marks
     </p>
    </div>
    <div class="code-block">
     y = d3.scaleLinear()
     <br/>
     .domain([0, d3.max(data, d =&gt; d.value)]).nice()
     <br/>
     .range([height - margin.bottom, margin.top])
     <br/>
     xAxis = g =&gt; g
     <br/>
     .attr("transform", translate(0,${height - margin.bottom}))
     <br/>
     .call(d3.axisBottom(x).tickSizeOuter(0))
    </div>
    <div class="numbered">
     <div class="number">
      4
     </div>
     <p>
      Domain
     </p>
    </div>
    <p>
     You
     <span style="color: #ff6f61;">
      idunt ut labore et scaleBand, range
     </span>
     empora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
    </p>
   </div>
   <div class="chart">
    <img alt="A bar chart showing the relative frequency of letters in the English language." height="100" src="https://storage.googleapis.com/a1aa/image/jWQfpeadG8iL4kaxbwpOuREBSmiFGvg95jvCuDAUO3wHcL3TA.jpg" width="200"/>
   </div>
  </div>
 </body>
</html>