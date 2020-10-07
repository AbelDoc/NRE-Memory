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
        <title>NRE-Memory: /mnt/c/Users/abell/Documents/GitHub/NRE-Memory/src/Memory/Allocator/NRE_AllocatorTraits.hpp Source File</title>
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
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
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
      <li><a href="files.php"><span>File&#160;List</span></a></li>
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
<li class="navelem"><a class="el" href="dir_68267d1309a1af8e8297ef4c3efbcdba.php">src</a></li><li class="navelem"><a class="el" href="dir_223fe3ddb66d6cdaa34448ac551f01ae.php">Memory</a></li><li class="navelem"><a class="el" href="dir_90418763254490afbe31fb653731f493.php">Allocator</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE_AllocatorTraits.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<a href="_n_r_e___allocator_traits_8hpp.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;    </div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="preprocessor">    #pragma once</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;    </div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="preprocessor">    #include &lt;limits&gt;</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="preprocessor">    #include &lt;type_traits&gt;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="preprocessor">    #include &lt;utility&gt;</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">    #include &quot;Utility/Interfaces/NRE_StaticInterface.hpp&quot;</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;    </div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    <span class="keyword">namespace </span><a class="code" href="namespace_n_r_e.php">NRE</a> {</div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;        <span class="keyword">namespace </span><a class="code" href="namespace_memory.php">Memory</a> {</div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;    </div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> Alloc&gt;</div><div class="line"><a name="l00033"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">   33</a></span>&#160;            <span class="keyword">class </span><a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">AllocatorTraits</a> {</div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;            };</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">template</span> &lt;<span class="keyword">class</span>, <span class="keyword">class </span>...&gt; <span class="keyword">class </span>Alloc, <span class="keyword">class </span>T, <span class="keyword">class </span>... AllocArgs&gt;</div><div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php">   40</a></span>&#160;            <span class="keyword">class </span><a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">AllocatorTraits</a>&lt;Alloc&lt;T, AllocArgs...&gt;&gt; : <span class="keyword">public</span> Utility::StaticInterface&lt;AllocatorTraits&lt;Alloc&lt;T, AllocArgs...&gt;&gt;&gt; {</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;                <span class="keyword">public</span>:     <span class="comment">// Traits</span></div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#acbd51317e9cbd28f33205547b9e040be">   43</a></span>&#160;<span class="comment"></span>                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#acbd51317e9cbd28f33205547b9e040be">AllocatorType</a> = Alloc&lt;T, AllocArgs...&gt;;</div><div class="line"><a name="l00045"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">   45</a></span>&#160;                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">ValueType</a>     = T;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">   47</a></span>&#160;                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">Pointer</a>       = T*;</div><div class="line"><a name="l00049"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a450a4a99715b80fe28e4c0c415a157d5">   49</a></span>&#160;                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a450a4a99715b80fe28e4c0c415a157d5">ConstPointer</a>  = <span class="keyword">const</span> T*;</div><div class="line"><a name="l00051"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">   51</a></span>&#160;                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">SizeType</a>      = std::size_t;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;                    </div><div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;                    <span class="keyword">template</span> &lt;<span class="keyword">class</span> K&gt;</div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded.php">   58</a></span>&#160;                    <span class="keyword">struct </span>Rebinded {</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded.php#a87dafbbe405d07ecb9842fe057b16b0f">   60</a></span>&#160;                        <span class="keyword">using</span> <a class="code" href="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded.php#a87dafbbe405d07ecb9842fe057b16b0f">Type</a> = Alloc&lt;K, AllocArgs...&gt;;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;                    };</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;    </div><div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;                    <span class="keyword">template</span> &lt;<span class="keyword">class</span> K&gt;</div><div class="line"><a name="l00065"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a8f39fd287b898c991dafee6e9d43be12">   65</a></span>&#160;                    <span class="keyword">using</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a8f39fd287b898c991dafee6e9d43be12">Rebind</a> = <span class="keyword">typename</span> <a class="code" href="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded.php#a87dafbbe405d07ecb9842fe057b16b0f">Rebinded&lt;K&gt;::Type</a>;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;                    </div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;                <span class="keyword">public</span>: <span class="comment">// Methods</span></div><div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;                    <span class="comment">//## Getter ##//</span></div><div class="line"><a name="l00072"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a6781b6da52549beb2df1a91013a377bf">   72</a></span>&#160;<span class="comment"></span>                        [[nodiscard]] <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">SizeType</a> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a6781b6da52549beb2df1a91013a377bf">getMaxSize</a>() const noexcept {</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;                            <span class="keywordflow">return</span> std::numeric_limits&lt;std::size_t&gt;::max() / <span class="keyword">sizeof</span>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">ValueType</a>);</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;                        }</div><div class="line"><a name="l00080"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a206d2739b7cb99d27af15b226d2eeb71">   80</a></span>&#160;                        [[nodiscard]] <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">Pointer</a> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a206d2739b7cb99d27af15b226d2eeb71">getAddress</a>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">ValueType</a>&amp; <span class="keywordtype">object</span>) <span class="keyword">const</span> noexcept {</div><div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;                            <span class="keywordflow">return</span> std::addressof(<span class="keywordtype">object</span>);</div><div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;                        }</div><div class="line"><a name="l00088"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a05bf60002102a9b419ff32b93cca043c">   88</a></span>&#160;                        [[nodiscard]] <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a450a4a99715b80fe28e4c0c415a157d5">ConstPointer</a> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a05bf60002102a9b419ff32b93cca043c">getAddress</a>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">ValueType</a> <span class="keyword">const</span>&amp; <span class="keywordtype">object</span>) <span class="keyword">const</span> noexcept {</div><div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;                            <span class="keywordflow">return</span> std::addressof(<span class="keywordtype">object</span>);</div><div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;                        }</div><div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;    </div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;                    <span class="comment">//## Methods ##//</span></div><div class="line"><a name="l00098"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9f01ece6d7a56473b2b378116c4b281a">   98</a></span>&#160;<span class="comment"></span>                        [[nodiscard]] <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">Pointer</a> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9f01ece6d7a56473b2b378116c4b281a">allocate</a>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">SizeType</a> n = 1) {</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;                            <span class="keywordflow">return</span> this-&gt;impl().allocate(n);</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;                        }</div><div class="line"><a name="l00105"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#afa9d2cef262827294a84fac7e3cc7b40">  105</a></span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#afa9d2cef262827294a84fac7e3cc7b40">deallocate</a>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">Pointer</a> p) {</div><div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;                            this-&gt;impl().deallocate(p);</div><div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;                        }</div><div class="line"><a name="l00113"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#ab52a5e3425147884f0e6782deddac77f">  113</a></span>&#160;                        <span class="keywordtype">void</span> <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#ab52a5e3425147884f0e6782deddac77f">deallocate</a>(<a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">Pointer</a> p, <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">SizeType</a> n) {</div><div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;                            this-&gt;impl().deallocate(p, n);</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;                        }</div><div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;                        <span class="keyword">template</span> &lt;<span class="keyword">class </span>K, <span class="keyword">class </span>... Args&gt;</div><div class="line"><a name="l00123"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a1a7cc004b9c731bb620a1ec261a0a277">  123</a></span>&#160;                        K* <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a1a7cc004b9c731bb620a1ec261a0a277">construct</a>(K* p, Args &amp;&amp; ... args) {</div><div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;                            <span class="keywordflow">return</span> this-&gt;impl().construct(p, std::forward&lt;Args&gt;(args)...);</div><div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;                        }</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;                        <span class="keyword">template</span> &lt;<span class="keyword">class</span> K&gt;</div><div class="line"><a name="l00132"></a><span class="lineno"><a class="line" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9fde1294b99e6d45bea2638dfb0eb896">  132</a></span>&#160;                        K* <a class="code" href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9fde1294b99e6d45bea2638dfb0eb896">destroy</a>(K* p) {</div><div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;                            <span class="keywordflow">return</span> this-&gt;impl().destroy(p);</div><div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;                        }</div><div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;            };</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;    </div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00142"></a><span class="lineno"><a class="line" href="struct_n_r_e_1_1_memory_1_1_is_allocator.php">  142</a></span>&#160;            <span class="keyword">struct </span><a class="code" href="struct_n_r_e_1_1_memory_1_1_is_allocator.php">IsAllocator</a> : std::is_base_of&lt;AllocatorTraits&lt;T&gt;, T&gt; {</div><div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;            };</div><div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;    </div><div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;            <span class="keyword">template</span> &lt;<span class="keyword">class</span> T&gt;</div><div class="line"><a name="l00147"></a><span class="lineno"><a class="line" href="_n_r_e___allocator_traits_8hpp.php#a4694f8b2130e99c5790e9ee649620993">  147</a></span>&#160;            constexpr <span class="keywordtype">bool</span> <a class="code" href="_n_r_e___allocator_traits_8hpp.php#a4694f8b2130e99c5790e9ee649620993">IsAllocatorV</a> = <a class="code" href="struct_n_r_e_1_1_memory_1_1_is_allocator.php">IsAllocator&lt;T&gt;::value</a>;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        }</div><div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;    }</div><div class="ttc" id="struct_n_r_e_1_1_memory_1_1_is_allocator_php"><div class="ttname"><a href="struct_n_r_e_1_1_memory_1_1_is_allocator.php">NRE::Memory::IsAllocator</a></div><div class="ttdoc">Check if the given template is an allocator class. </div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:142</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_php"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits.php">NRE::Memory::AllocatorTraits</a></div><div class="ttdoc">Describe an allocator object. </div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:33</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a05bf60002102a9b419ff32b93cca043c"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a05bf60002102a9b419ff32b93cca043c">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::getAddress</a></div><div class="ttdeci">ConstPointer getAddress(ValueType const &amp;object) const noexcept</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:88</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_afa9d2cef262827294a84fac7e3cc7b40"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#afa9d2cef262827294a84fac7e3cc7b40">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::deallocate</a></div><div class="ttdeci">void deallocate(Pointer p)</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:105</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a7f73cde9c99e2ab816fe69e2600681e4"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f73cde9c99e2ab816fe69e2600681e4">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::Pointer</a></div><div class="ttdeci">T * Pointer</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:47</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a8f39fd287b898c991dafee6e9d43be12"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a8f39fd287b898c991dafee6e9d43be12">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::Rebind</a></div><div class="ttdeci">typename Rebinded&lt; K &gt;::Type Rebind</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:65</div></div>
<div class="ttc" id="namespace_memory_php"><div class="ttname"><a href="namespace_memory.php">Memory</a></div><div class="ttdoc">Memory&amp;#39;s API. </div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a1a7cc004b9c731bb620a1ec261a0a277"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a1a7cc004b9c731bb620a1ec261a0a277">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::construct</a></div><div class="ttdeci">K * construct(K *p, Args &amp;&amp;...args)</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:123</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a9fde1294b99e6d45bea2638dfb0eb896"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9fde1294b99e6d45bea2638dfb0eb896">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::destroy</a></div><div class="ttdeci">K * destroy(K *p)</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:132</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a9f01ece6d7a56473b2b378116c4b281a"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a9f01ece6d7a56473b2b378116c4b281a">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::allocate</a></div><div class="ttdeci">Pointer allocate(SizeType n=1)</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:98</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a206d2739b7cb99d27af15b226d2eeb71"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a206d2739b7cb99d27af15b226d2eeb71">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::getAddress</a></div><div class="ttdeci">Pointer getAddress(ValueType &amp;object) const noexcept</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:80</div></div>
<div class="ttc" id="namespace_n_r_e_php"><div class="ttname"><a href="namespace_n_r_e.php">NRE</a></div><div class="ttdoc">The NearlyRealEngine&amp;#39;s global namespace. </div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a6781b6da52549beb2df1a91013a377bf"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a6781b6da52549beb2df1a91013a377bf">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::getMaxSize</a></div><div class="ttdeci">SizeType getMaxSize() const noexcept</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:72</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_acbd51317e9cbd28f33205547b9e040be"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#acbd51317e9cbd28f33205547b9e040be">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::AllocatorType</a></div><div class="ttdeci">Alloc&lt; T, AllocArgs... &gt; AllocatorType</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:43</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a7f223d5595247900e62f2ee05de7f7d0"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a7f223d5595247900e62f2ee05de7f7d0">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::SizeType</a></div><div class="ttdeci">std::size_t SizeType</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:51</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_ab52a5e3425147884f0e6782deddac77f"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#ab52a5e3425147884f0e6782deddac77f">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::deallocate</a></div><div class="ttdeci">void deallocate(Pointer p, SizeType n)</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:113</div></div>
<div class="ttc" id="_n_r_e___allocator_traits_8hpp_php_a4694f8b2130e99c5790e9ee649620993"><div class="ttname"><a href="_n_r_e___allocator_traits_8hpp.php#a4694f8b2130e99c5790e9ee649620993">NRE::Memory::IsAllocatorV</a></div><div class="ttdeci">constexpr bool IsAllocatorV</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:147</div></div>
<div class="ttc" id="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded_php_a87dafbbe405d07ecb9842fe057b16b0f"><div class="ttname"><a href="struct_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_1_1_rebinded.php#a87dafbbe405d07ecb9842fe057b16b0f">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::Rebinded::Type</a></div><div class="ttdeci">Alloc&lt; K, AllocArgs... &gt; Type</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:60</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a450a4a99715b80fe28e4c0c415a157d5"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a450a4a99715b80fe28e4c0c415a157d5">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::ConstPointer</a></div><div class="ttdeci">const T * ConstPointer</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:49</div></div>
<div class="ttc" id="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4_php_a78aa851f3a8dc304414e750f1f1f158e"><div class="ttname"><a href="class_n_r_e_1_1_memory_1_1_allocator_traits_3_01_alloc_3_01_t_00_01_alloc_args_8_8_8_01_4_01_4.php#a78aa851f3a8dc304414e750f1f1f158e">NRE::Memory::AllocatorTraits&lt; Alloc&lt; T, AllocArgs... &gt; &gt;::ValueType</a></div><div class="ttdeci">T ValueType</div><div class="ttdef"><b>Definition:</b> NRE_AllocatorTraits.hpp:45</div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>