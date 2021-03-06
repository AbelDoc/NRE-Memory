<!-- HTML header for doxygen 1.8.8-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Mobile Devices -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
        <meta name="generator" content="Doxygen 1.8.11"/>
        <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
        <title>NRE-Memory: NRE::Memory::MemoryHelper Class Reference</title>
        <!--<link href="tabs.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="dynsections.js"></script>
        <link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<script type="text/javascript">
  $(document).ready(function() { init_search(); });
</script>
        <link href="doxygen.css" rel="stylesheet" type="text/css" />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <?php
            include '../../php/navigation.php';
            if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == "dark") {
                echo '<link href="../../css/dark/bootstrap.css" rel="stylesheet">';
            } else {
                echo '<link href="../../css/light/bootstrap.css" rel="stylesheet">';
            }
        ?>
        <script src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="doxy-boot.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <header class="page-header">
                <a href="../../../index.php">
                    <img src="../../img/Logo.png" class="logo img-responsive"/>
                </a>
            </header>
            <?php addNavigationBarInl(false); ?>
            <div id="top" class="row"><!-- do not remove this div, it is closed by doxygen! -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
<!-- end header part -->
<!-- Generated by Doxygen 1.8.11 -->
<script type="text/javascript">
var searchBox = new SearchBox("searchBox", "search",false,'Search');
</script>
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
      <li>
        <div id="MSearchBox" class="MSearchBoxInactive">
        <span class="left">
          <img id="MSearchSelect" src="search/mag_sel.png"
               onmouseover="return searchBox.OnSearchSelectShow()"
               onmouseout="return searchBox.OnSearchSelectHide()"
               alt=""/>
          <input type="text" id="MSearchField" value="Search" accesskey="S"
               onfocus="searchBox.OnSearchFieldFocus(true)" 
               onblur="searchBox.OnSearchFieldFocus(false)" 
               onkeyup="searchBox.OnSearchFieldChange(event)"/>
          </span><span class="right">
            <a id="MSearchClose" href="javascript:searchBox.CloseResultsWindow()"><img id="MSearchCloseImg" border="0" src="search/close.png" alt=""/></a>
          </span>
        </div>
      </li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>Memory</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pro-attribs">Protected Attributes</a> &#124;
<a href="class_n_r_e_1_1_memory_1_1_memory_helper-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">NRE::Memory::MemoryHelper Class Reference<span class="mlabels"><span class="mlabel">abstract</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>Store a memory pointer, need to be used from derived class.  
 <a href="class_n_r_e_1_1_memory_1_1_memory_helper.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="_n_r_e___memory_helper_8hpp_source.php">NRE_MemoryHelper.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for NRE::Memory::MemoryHelper:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_n_r_e_1_1_memory_1_1_memory_helper.png" usemap="#NRE::Memory::MemoryHelper_map" alt=""/>
  <map id="NRE::Memory::MemoryHelper_map" name="NRE::Memory::MemoryHelper_map">
<area href="class_n_r_e_1_1_memory_1_1_memory.php" title="Store a memory pointer, and manage it in a typed manner. " alt="NRE::Memory::Memory&lt; T &gt;" shape="rect" coords="0,112,223,136"/>
<area href="class_n_r_e_1_1_memory_1_1_memory_3_01void_01_4.php" alt="NRE::Memory::Memory&lt; void &gt;" shape="rect" coords="233,112,456,136"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:aba2fc0b8ec9e9e8fed7db31bd3b6d25e"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#aba2fc0b8ec9e9e8fed7db31bd3b6d25e">MemoryHelper</a> (void *d)</td></tr>
<tr class="separator:aba2fc0b8ec9e9e8fed7db31bd3b6d25e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8ef572dbda6051612de78c8d5ff33cad"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a8ef572dbda6051612de78c8d5ff33cad">MemoryHelper</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;m)</td></tr>
<tr class="separator:a8ef572dbda6051612de78c8d5ff33cad"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab101312e57c8f2d0f5b98534f88f57ac"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#ab101312e57c8f2d0f5b98534f88f57ac">~MemoryHelper</a> ()=default</td></tr>
<tr class="separator:ab101312e57c8f2d0f5b98534f88f57ac"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a48a9ae66560f9c35941d5bcf47a128e5"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a48a9ae66560f9c35941d5bcf47a128e5">getData</a> () const </td></tr>
<tr class="separator:a48a9ae66560f9c35941d5bcf47a128e5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7682a33118461ea406c6b9a9f2f6b129"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a7682a33118461ea406c6b9a9f2f6b129">free</a> ()=0</td></tr>
<tr class="separator:a7682a33118461ea406c6b9a9f2f6b129"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1c2995adac2cf17a711975b50daeb3d0"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a1c2995adac2cf17a711975b50daeb3d0">operator=</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;m)</td></tr>
<tr class="separator:a1c2995adac2cf17a711975b50daeb3d0"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pro-attribs"></a>
Protected Attributes</h2></td></tr>
<tr class="memitem:a931d45f5fa663a18b21f8f5c99e1c242"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a931d45f5fa663a18b21f8f5c99e1c242">data</a></td></tr>
<tr class="separator:a931d45f5fa663a18b21f8f5c99e1c242"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Store a memory pointer, need to be used from derived class. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="aba2fc0b8ec9e9e8fed7db31bd3b6d25e"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Memory::MemoryHelper::MemoryHelper </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"><em>d</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Construct the helper from it's data </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">d</td><td>the data to store </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a8ef572dbda6051612de78c8d5ff33cad"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">NRE::Memory::MemoryHelper::MemoryHelper </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>m</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move m into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">m</td><td>the helper to move </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="ab101312e57c8f2d0f5b98534f88f57ac"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual NRE::Memory::MemoryHelper::~MemoryHelper </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">virtual</span><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php" title="Store a memory pointer, need to be used from derived class. ">MemoryHelper</a> Deconstructor </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a7682a33118461ea406c6b9a9f2f6b129"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">virtual void NRE::Memory::MemoryHelper::free </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">pure virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Free the stored pointer, only the memory manager should call this function </p>

<p>Implemented in <a class="el" href="class_n_r_e_1_1_memory_1_1_memory_3_01void_01_4.php#ab4ab52fa8b31cef1f27d0b5aeaa7b2dc">NRE::Memory::Memory&lt; void &gt;</a>, and <a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php#a889a76a7e78e8620c19cf13c9d5ebc90">NRE::Memory::Memory&lt; T &gt;</a>.</p>

</div>
</div>
<a class="anchor" id="a48a9ae66560f9c35941d5bcf47a128e5"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void* NRE::Memory::MemoryHelper::getData </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<dl class="section return"><dt>Returns</dt><dd>the stored pointer </dd></dl>

</div>
</div>
<a class="anchor" id="a1c2995adac2cf17a711975b50daeb3d0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a>&amp; NRE::Memory::MemoryHelper::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>m</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Move m into this </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">m</td><td>the helper to move into this </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the reference of himself </dd></dl>

</div>
</div>
<h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="a931d45f5fa663a18b21f8f5c99e1c242"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void* NRE::Memory::MemoryHelper::data</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">protected</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>The stored pointer </p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>/mnt/c/Users/abell/Documents/GitHub/NRE-Memory/src/Memory/Manager/Data/<a class="el" href="_n_r_e___memory_helper_8hpp_source.php">NRE_MemoryHelper.hpp</a></li>
</ul>
</div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
