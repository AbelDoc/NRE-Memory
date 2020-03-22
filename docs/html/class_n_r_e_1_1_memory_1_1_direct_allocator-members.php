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
        <title>NRE-Memory: Member List</title>
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
<li class="navelem"><a class="el" href="namespace_n_r_e.php">NRE</a></li><li class="navelem"><b>Memory</b></li><li class="navelem"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">DirectAllocator</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">NRE::Memory::DirectAllocator&lt; T &gt; Member List</div>  </div>
</div><!--header-->
<div class="contents">

<p>This is the complete list of members for <a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a>, including all inherited members.</p>
<table class="directory">
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#af164ce84938bbccd55bc40e84934b62e">allocate</a>(std::size_t n)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a844222c73953e74882ff52e6b6eebc42">construct</a>(K *p, Args &amp;&amp;...args)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#aeec58465a06aec7f5c806be1d8f27b61">deallocate</a>(T *&amp;p)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a318cf1b70716a4fa4e72a25a98e1bc57">deallocate</a>(T *&amp;p, std::size_t n)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#ad05fa4c8c1085707f4b912db2ca667d7">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::deallocate</a>(DirectAllocator&lt; T &gt; *&amp;p)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#ad4748b052104daed4a44aa2f5ced23b3">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::deallocate</a>(DirectAllocator&lt; T &gt; *&amp;p, std::size_t n)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a021280fc327c81a9881e4d6c29acde5e">destroy</a>(K *p)</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#ae962c2214146350e72864d7a66828072">equal</a>(K const &amp;o) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#ae962c2214146350e72864d7a66828072">equal</a>(K const &amp;o) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a21839163c7dd59239ec3ea149d7458e3">getAddress</a>(T &amp;object) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a0a3aaf395eeb5caaad2f3ae3c5580611">getAddress</a>(T const &amp;object) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#a546ef27c17d2c2a034abd989526f9770">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::getAddress</a>(DirectAllocator&lt; T &gt; &amp;object) const</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#a8f32641335996c8311f26817c0816b12">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::getAddress</a>(DirectAllocator&lt; T &gt;const &amp;object) const</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#ac8014229d6a6492e1968a025353b89b3">getMaxSize</a>() const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a727537922d07b8d6f2434593c361de3a">operator!=</a>(DirectAllocator&lt; K &gt; const &amp;o) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#ac27e2268a23a2feb285bb956cc267a1f">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::operator!=</a>(IAllocator&lt; K &gt; const &amp;o) const</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr class="even"><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php#a90465dfca3f08f978514dc76c2cdf27b">operator==</a>(DirectAllocator&lt; K &gt; const &amp;o) const </td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_direct_allocator.php">NRE::Memory::DirectAllocator&lt; T &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
  <tr><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php#a096981a3600ebc03140c9345482acb04">IAllocator&lt; DirectAllocator&lt; T &gt; &gt;::operator==</a>(IAllocator&lt; K &gt; const &amp;o) const</td><td class="entry"><a class="el" href="class_n_r_e_1_1_memory_1_1_i_allocator.php">NRE::Memory::IAllocator&lt; DirectAllocator&lt; T &gt; &gt;</a></td><td class="entry"><span class="mlabel">inline</span></td></tr>
</table></div><!-- contents -->
<!-- HTML footer for doxygen 1.8.8-->
<!-- start footer part -->
</div>
</div>
</div>
</div>
</body>
</html>
