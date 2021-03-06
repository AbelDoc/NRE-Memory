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
        <title>NRE-Memory: NRE::Memory::DefaultAllocator&lt; T &gt; Class Template Reference</title>
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
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>Memory</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-types">Public Types</a> &#124;
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="class_n_r_e_1_1_memory_1_1_default_allocator-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">NRE::Memory::DefaultAllocator&lt; T &gt; Class Template Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p>Default allocator using global new and delete.  
 <a href="class_n_r_e_1_1_memory_1_1_default_allocator.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="_n_r_e___default_allocator_8hpp_source.php">NRE_DefaultAllocator.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for NRE::Memory::DefaultAllocator&lt; T &gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="class_n_r_e_1_1_memory_1_1_default_allocator.png" usemap="#NRE::Memory::DefaultAllocator_3C_20T_20_3E_map" alt=""/>
  <map id="NRE::Memory::DefaultAllocator_3C_20T_20_3E_map" name="NRE::Memory::DefaultAllocator&lt; T &gt;_map">
<area href="class_n_r_e_1_1_memory_1_1_allocator_traits.php" alt="NRE::Memory::AllocatorTraits&lt; DefaultAllocator&lt; T &gt; &gt;" shape="rect" coords="0,0,323,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-types"></a>
Public Types</h2></td></tr>
<tr class="memitem:a8371653e924ca448e5923a97989a450b"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a8371653e924ca448e5923a97989a450b">Traits</a> = <a class="el" href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">AllocatorTraits</a>&lt; <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a>&lt; T &gt;&gt;</td></tr>
<tr class="separator:a8371653e924ca448e5923a97989a450b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a45284e27381356bba10f0199a83ae9d7"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a45284e27381356bba10f0199a83ae9d7">ValueType</a> = typename Traits::ValueType</td></tr>
<tr class="separator:a45284e27381356bba10f0199a83ae9d7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a55cdfb77ac670c7f0f354c4520e1d75f"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a> = typename Traits::Pointer</td></tr>
<tr class="separator:a55cdfb77ac670c7f0f354c4520e1d75f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afbf052bb7b3e436082c766deb95e80a9"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#afbf052bb7b3e436082c766deb95e80a9">ConstPointer</a> = typename Traits::ConstPointer</td></tr>
<tr class="separator:afbf052bb7b3e436082c766deb95e80a9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac1e05995ba31cba1bb617dfe66ad1039"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a> = typename Traits::SizeType</td></tr>
<tr class="separator:ac1e05995ba31cba1bb617dfe66ad1039"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:adc2634bd4d47a2b862bb444732dceaeb"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#adc2634bd4d47a2b862bb444732dceaeb">DefaultAllocator</a> () noexcept=default</td></tr>
<tr class="separator:adc2634bd4d47a2b862bb444732dceaeb"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0e16fdddca59a06b56d1892f5a69fdec"><td class="memTemplParams" colspan="2">template&lt;class K &gt; </td></tr>
<tr class="memitem:a0e16fdddca59a06b56d1892f5a69fdec"><td class="memTemplItemLeft" align="right" valign="top">&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a0e16fdddca59a06b56d1892f5a69fdec">DefaultAllocator</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a>&lt; K &gt; const &amp;alloc) noexcept</td></tr>
<tr class="separator:a0e16fdddca59a06b56d1892f5a69fdec"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a9b3cbddea4785bb6fb04d48b896f18e1"><td class="memItemLeft" align="right" valign="top"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a9b3cbddea4785bb6fb04d48b896f18e1">allocate</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a> n=1)</td></tr>
<tr class="separator:a9b3cbddea4785bb6fb04d48b896f18e1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8cc22e61037fa1a5d1690638ab44bb65"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a8cc22e61037fa1a5d1690638ab44bb65">deallocate</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a> p)</td></tr>
<tr class="separator:a8cc22e61037fa1a5d1690638ab44bb65"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a523f0f5c8750d93053deb07e4ffb5b3b"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a523f0f5c8750d93053deb07e4ffb5b3b">deallocate</a> (<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a> p, <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a> n)</td></tr>
<tr class="separator:a523f0f5c8750d93053deb07e4ffb5b3b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aacfc9d6880c15355f1ba8ab57535ecd0"><td class="memTemplParams" colspan="2">template&lt;class K , class... Args&gt; </td></tr>
<tr class="memitem:aacfc9d6880c15355f1ba8ab57535ecd0"><td class="memTemplItemLeft" align="right" valign="top">K *&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#aacfc9d6880c15355f1ba8ab57535ecd0">construct</a> (K *p, Args &amp;&amp;...args)</td></tr>
<tr class="separator:aacfc9d6880c15355f1ba8ab57535ecd0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a8145d9f7fa7e362f6d85e6f2301f6a48"><td class="memTemplParams" colspan="2">template&lt;class K &gt; </td></tr>
<tr class="memitem:a8145d9f7fa7e362f6d85e6f2301f6a48"><td class="memTemplItemLeft" align="right" valign="top">K *&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a8145d9f7fa7e362f6d85e6f2301f6a48">destroy</a> (K *p)</td></tr>
<tr class="separator:a8145d9f7fa7e362f6d85e6f2301f6a48"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;class T&gt;<br />
class NRE::Memory::DefaultAllocator&lt; T &gt;</h3>

<p>Default allocator using global new and delete. </p>
</div><h2 class="groupheader">Member Typedef Documentation</h2>
<a class="anchor" id="afbf052bb7b3e436082c766deb95e80a9"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#afbf052bb7b3e436082c766deb95e80a9">ConstPointer</a> =  typename Traits::ConstPointer</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The pointer on constant allocated type </p>

</div>
</div>
<a class="anchor" id="a55cdfb77ac670c7f0f354c4520e1d75f"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a> =  typename Traits::Pointer</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The pointer on allocated type </p>

</div>
</div>
<a class="anchor" id="ac1e05995ba31cba1bb617dfe66ad1039"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a> =  typename Traits::SizeType</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The allocator size type </p>

</div>
</div>
<a class="anchor" id="a8371653e924ca448e5923a97989a450b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a8371653e924ca448e5923a97989a450b">Traits</a> =  <a class="el" href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">AllocatorTraits</a>&lt;<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a>&lt;T&gt;&gt;</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Inherited allocator traits </p>

</div>
</div>
<a class="anchor" id="a45284e27381356bba10f0199a83ae9d7"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">using <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a45284e27381356bba10f0199a83ae9d7">ValueType</a> =  typename Traits::ValueType</td>
        </tr>
      </table>
</div><div class="memdoc">
<p>The allocated type </p>

</div>
</div>
<h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="adc2634bd4d47a2b862bb444732dceaeb"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a> </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Default constructor </p>

</div>
</div>
<a class="anchor" id="a0e16fdddca59a06b56d1892f5a69fdec"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<div class="memtemplate">
template&lt;class K &gt; </div>
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::<a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a> </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">DefaultAllocator</a>&lt; K &gt; const &amp;&#160;</td>
          <td class="paramname"><em>alloc</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">
<p>Convert a K-type allocator into a T-type allocator </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">alloc</td><td>the allocator to convert </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a9b3cbddea4785bb6fb04d48b896f18e1"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a> <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::allocate </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a>&#160;</td>
          <td class="paramname"><em>n</em> = <code>1</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Allocate n * sizeof(T) bytes </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">n</td><td>the number of object </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>a pointer on the first allocated bytes </dd></dl>

</div>
</div>
<a class="anchor" id="aacfc9d6880c15355f1ba8ab57535ecd0"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<div class="memtemplate">
template&lt;class K , class... Args&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">K* <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::construct </td>
          <td>(</td>
          <td class="paramtype">K *&#160;</td>
          <td class="paramname"><em>p</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Args &amp;&amp;...&#160;</td>
          <td class="paramname"><em>args</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Construct a K-type object in the given pointer with given arguments </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">p</td><td>the pointer to construct the object </td></tr>
    <tr><td class="paramname">args</td><td>the construction arguments </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the input pointer </dd></dl>

</div>
</div>
<a class="anchor" id="a8cc22e61037fa1a5d1690638ab44bb65"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::deallocate </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a>&#160;</td>
          <td class="paramname"><em>p</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Deallocate a pointer given by an allocate call </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">p</td><td>the pointer on the first bytes allocated </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a523f0f5c8750d93053deb07e4ffb5b3b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">void <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::deallocate </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#a55cdfb77ac670c7f0f354c4520e1d75f">Pointer</a>&#160;</td>
          <td class="paramname"><em>p</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php#ac1e05995ba31cba1bb617dfe66ad1039">SizeType</a>&#160;</td>
          <td class="paramname"><em>n</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Deallocate a pointer given by an allocate call </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">p</td><td>the pointer on the first bytes allocated </td></tr>
    <tr><td class="paramname">n</td><td>the number of object allocated </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<a class="anchor" id="a8145d9f7fa7e362f6d85e6f2301f6a48"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;class T &gt; </div>
<div class="memtemplate">
template&lt;class K &gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">K* <a class="el" href="class_n_r_e_1_1_memory_1_1_default_allocator.php">NRE::Memory::DefaultAllocator</a>&lt; T &gt;::destroy </td>
          <td>(</td>
          <td class="paramtype">K *&#160;</td>
          <td class="paramname"><em>p</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">
<p>Destroy an given to the given pointer </p><dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">p</td><td>the object address </td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>the input pointer </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li>/mnt/c/Users/abell/Documents/GitHub/NRE-Memory/src/Memory/Allocator/Default/<a class="el" href="_n_r_e___default_allocator_8hpp_source.php">NRE_DefaultAllocator.hpp</a></li>
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
