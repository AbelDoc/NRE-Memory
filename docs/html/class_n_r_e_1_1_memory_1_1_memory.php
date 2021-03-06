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
        <title>NRE-Memory: NRE::Memory::Memory&lt; T &gt; Class Template Reference</title>
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
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>Memory</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php">Memory</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="class_n_r_e_1_1_memory_1_1_memory-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">NRE::Memory::Memory&lt; T &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Store a memory pointer, and manage it in a typed manner.  
 <a href="class_n_r_e_1_1_memory_1_1_memory.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="_memory_2_manager_2_data_2_n_r_e___memory_8hpp_source.php">NRE_Memory.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for NRE::Memory::Memory&lt; T &gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_n_r_e_1_1_memory_1_1_memory.png" usemap="#NRE::Memory::Memory_3C_20T_20_3E_map" alt=""/>
  <map id="NRE::Memory::Memory_3C_20T_20_3E_map" name="NRE::Memory::Memory&lt; T &gt;_map">
<area href="class_n_r_e_1_1_memory_1_1_memory_helper.php" title="Store a memory pointer, need to be used from derived class. " alt="NRE::Memory::MemoryHelper" shape="rect" coords="0,56,223,80"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:ac16541a849ddb56c20f7a86cceda80fb"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php#ac16541a849ddb56c20f7a86cceda80fb">Memory</a> (void *d)</td></tr>
<tr class="separator:ac16541a849ddb56c20f7a86cceda80fb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a889a76a7e78e8620c19cf13c9d5ebc90"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php#a889a76a7e78e8620c19cf13c9d5ebc90">free</a> () override</td></tr>
<tr class="separator:a889a76a7e78e8620c19cf13c9d5ebc90"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper')"><img src="closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">NRE::Memory::MemoryHelper</a></td></tr>
<tr class="memitem:aba2fc0b8ec9e9e8fed7db31bd3b6d25e inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#aba2fc0b8ec9e9e8fed7db31bd3b6d25e">MemoryHelper</a> (void *d)</td></tr>
<tr class="separator:aba2fc0b8ec9e9e8fed7db31bd3b6d25e inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8ef572dbda6051612de78c8d5ff33cad inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a8ef572dbda6051612de78c8d5ff33cad">MemoryHelper</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;m)</td></tr>
<tr class="separator:a8ef572dbda6051612de78c8d5ff33cad inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab101312e57c8f2d0f5b98534f88f57ac inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#ab101312e57c8f2d0f5b98534f88f57ac">~MemoryHelper</a> ()=default</td></tr>
<tr class="separator:ab101312e57c8f2d0f5b98534f88f57ac inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a48a9ae66560f9c35941d5bcf47a128e5 inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a48a9ae66560f9c35941d5bcf47a128e5">getData</a> () const </td></tr>
<tr class="separator:a48a9ae66560f9c35941d5bcf47a128e5 inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1c2995adac2cf17a711975b50daeb3d0 inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a1c2995adac2cf17a711975b50daeb3d0">operator=</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">MemoryHelper</a> &amp;&amp;m)</td></tr>
<tr class="separator:a1c2995adac2cf17a711975b50daeb3d0 inherit pub_methods_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="inherited"></a>
Additional Inherited Members</h2></td></tr>
<tr class="inherit_header pro_attribs_class_n_r_e_1_1_memory_1_1_memory_helper"><td colspan="2" onclick="javascript:toggleInherit('pro_attribs_class_n_r_e_1_1_memory_1_1_memory_helper')"><img src="closed.png" alt="-"/>&#160;Protected Attributes inherited from <a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php">NRE::Memory::MemoryHelper</a></td></tr>
<tr class="memitem:a931d45f5fa663a18b21f8f5c99e1c242 inherit pro_attribs_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a931d45f5fa663a18b21f8f5c99e1c242">data</a></td></tr>
<tr class="separator:a931d45f5fa663a18b21f8f5c99e1c242 inherit pro_attribs_class_n_r_e_1_1_memory_1_1_memory_helper"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;class T&gt;<br />
class NRE::Memory::Memory&lt; T &gt;</h3>

<p>Store a memory pointer, and manage it in a typed manner. </p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="ac16541a849ddb56c20f7a86cceda80fb"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php">NRE::Memory::Memory</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php">Memory</a> </td>
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
<p>Construct the memory from it's data </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">d</td><td>the data to store </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a889a76a7e78e8620c19cf13c9d5ebc90"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="class_n_r_e_1_1_memory_1_1_memory.php">NRE::Memory::Memory</a>&lt; T &gt;::free </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span><span class="mlabel">override</span><span class="mlabel">virtual</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Free the stored pointer, only the memory manager should call this function </p>

<p>Implements <a class="el" href="class_n_r_e_1_1_memory_1_1_memory_helper.php#a7682a33118461ea406c6b9a9f2f6b129">NRE::Memory::MemoryHelper</a>.</p>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>/mnt/c/Users/abell/Documents/GitHub/NRE-Memory/src/Memory/Manager/Data/<a class="el" href="_memory_2_manager_2_data_2_n_r_e___memory_8hpp_source.php">NRE_Memory.hpp</a></li>
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
