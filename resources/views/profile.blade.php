@extends('layouts.app-profile')
@section('content')
@if(session('success'))
<div class="alert alert-success w-50" role="alert">
    {{session('success')}}
</div>
@endif
@if(session('fail'))
<div class="alert alert-danger w-50" role="alert">
    {{session('fail')}}
</div>
@endif
<div class="col-lg-24">
    <div class="card">
        <div class="card-header">
            <h5 class="card-header-text">Profil səhifəsi</h5>
            <div class="f-right">
                <a href="" data-toggle="modal" data-target="#input-type-Modal"><i
                        class="icofont icofont-code-alt"></i></a>
            </div>
        </div>
        <div class="modal fade modal-flex" id="input-type-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h5 class="modal-title">Code Explanation For Input Types </h5>
                    </div>
                    <!-- end of modal-header -->
                    <div class="modal-body">
                        <div>
                            <div id="highlighter_184569" class="syntaxhighlighter  html">
                                <div class="toolbar"><span><a href="#"
                                            class="toolbar_item command_help help">?</a></span></div>
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td class="gutter">
                                                <div class="line number1 index0 alt2">1</div>
                                                <div class="line number2 index1 alt1">2</div>
                                                <div class="line number3 index2 alt2">3</div>
                                                <div class="line number4 index3 alt1">4</div>
                                                <div class="line number5 index4 alt2">5</div>
                                                <div class="line number6 index5 alt1">6</div>
                                                <div class="line number7 index6 alt2">7</div>
                                                <div class="line number8 index7 alt1">8</div>
                                                <div class="line number9 index8 alt2">9</div>
                                                <div class="line number10 index9 alt1">10</div>
                                                <div class="line number11 index10 alt2">11</div>
                                                <div class="line number12 index11 alt1">12</div>
                                                <div class="line number13 index12 alt2">13</div>
                                                <div class="line number14 index13 alt1">14</div>
                                                <div class="line number15 index14 alt2">15</div>
                                                <div class="line number16 index15 alt1">16</div>
                                                <div class="line number17 index16 alt2">17</div>
                                                <div class="line number18 index17 alt1">18</div>
                                                <div class="line number19 index18 alt2">19</div>
                                                <div class="line number20 index19 alt1">20</div>
                                                <div class="line number21 index20 alt2">21</div>
                                                <div class="line number22 index21 alt1">22</div>
                                                <div class="line number23 index22 alt2">23</div>
                                                <div class="line number24 index23 alt1">24</div>
                                                <div class="line number25 index24 alt2">25</div>
                                                <div class="line number26 index25 alt1">26</div>
                                                <div class="line number27 index26 alt2">27</div>
                                                <div class="line number28 index27 alt1">28</div>
                                                <div class="line number29 index28 alt2">29</div>
                                                <div class="line number30 index29 alt1">30</div>
                                                <div class="line number31 index30 alt2">31</div>
                                                <div class="line number32 index31 alt1">32</div>
                                                <div class="line number33 index32 alt2">33</div>
                                                <div class="line number34 index33 alt1">34</div>
                                                <div class="line number35 index34 alt2">35</div>
                                                <div class="line number36 index35 alt1">36</div>
                                                <div class="line number37 index36 alt2">37</div>
                                                <div class="line number38 index37 alt1">38</div>
                                                <div class="line number39 index38 alt2">39</div>
                                                <div class="line number40 index39 alt1">40</div>
                                                <div class="line number41 index40 alt2">41</div>
                                                <div class="line number42 index41 alt1">42</div>
                                                <div class="line number43 index42 alt2">43</div>
                                                <div class="line number44 index43 alt1">44</div>
                                                <div class="line number45 index44 alt2">45</div>
                                                <div class="line number46 index45 alt1">46</div>
                                                <div class="line number47 index46 alt2">47</div>
                                                <div class="line number48 index47 alt1">48</div>
                                                <div class="line number49 index48 alt2">49</div>
                                                <div class="line number50 index49 alt1">50</div>
                                                <div class="line number51 index50 alt2">51</div>
                                                <div class="line number52 index51 alt1">52</div>
                                                <div class="line number53 index52 alt2">53</div>
                                                <div class="line number54 index53 alt1">54</div>
                                                <div class="line number55 index54 alt2">55</div>
                                                <div class="line number56 index55 alt1">56</div>
                                                <div class="line number57 index56 alt2">57</div>
                                                <div class="line number58 index57 alt1">58</div>
                                                <div class="line number59 index58 alt2">59</div>
                                                <div class="line number60 index59 alt1">60</div>
                                                <div class="line number61 index60 alt2">61</div>
                                                <div class="line number62 index61 alt1">62</div>
                                                <div class="line number63 index62 alt2">63</div>
                                                <div class="line number64 index63 alt1">64</div>
                                                <div class="line number65 index64 alt2">65</div>
                                                <div class="line number66 index65 alt1">66</div>
                                                <div class="line number67 index66 alt2">67</div>
                                                <div class="line number68 index67 alt1">68</div>
                                                <div class="line number69 index68 alt2">69</div>
                                                <div class="line number70 index69 alt1">70</div>
                                                <div class="line number71 index70 alt2">71</div>
                                                <div class="line number72 index71 alt1">72</div>
                                                <div class="line number73 index72 alt2">73</div>
                                                <div class="line number74 index73 alt1">74</div>
                                                <div class="line number75 index74 alt2">75</div>
                                                <div class="line number76 index75 alt1">76</div>
                                                <div class="line number77 index76 alt2">77</div>
                                                <div class="line number78 index77 alt1">78</div>
                                                <div class="line number79 index78 alt2">79</div>
                                                <div class="line number80 index79 alt1">80</div>
                                                <div class="line number81 index80 alt2">81</div>
                                                <div class="line number82 index81 alt1">82</div>
                                                <div class="line number83 index82 alt2">83</div>
                                                <div class="line number84 index83 alt1">84</div>
                                                <div class="line number85 index84 alt2">85</div>
                                                <div class="line number86 index85 alt1">86</div>
                                                <div class="line number87 index86 alt2">87</div>
                                                <div class="line number88 index87 alt1">88</div>
                                                <div class="line number89 index88 alt2">89</div>
                                                <div class="line number90 index89 alt1">90</div>
                                                <div class="line number91 index90 alt2">91</div>
                                                <div class="line number92 index91 alt1">92</div>
                                                <div class="line number93 index92 alt2">93</div>
                                                <div class="line number94 index93 alt1">94</div>
                                                <div class="line number95 index94 alt2">95</div>
                                                <div class="line number96 index95 alt1">96</div>
                                                <div class="line number97 index96 alt2">97</div>
                                                <div class="line number98 index97 alt1">98</div>
                                                <div class="line number99 index98 alt2">99</div>
                                                <div class="line number100 index99 alt1">100</div>
                                                <div class="line number101 index100 alt2">101</div>
                                                <div class="line number102 index101 alt1">102</div>
                                                <div class="line number103 index102 alt2">103</div>
                                                <div class="line number104 index103 alt1">104</div>
                                                <div class="line number105 index104 alt2">105</div>
                                            </td>
                                            <td class="code">
                                                <div class="container">
                                                    <div class="line number1 index0 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">note</code><code
                                                            class="html plain">&gt; This Code Write inside
                                                            &lt;</code><code class="html keyword">form</code><code
                                                            class="html plain">&gt; tag</code></div>
                                                    <div class="line number2 index1 alt1">&nbsp;</div>
                                                    <div class="line number3 index2 alt2"><code class="html plain">/*
                                                            For Email Address */</code></div>
                                                    <div class="line number4 index3 alt1">&nbsp;</div>
                                                    <div class="line number5 index4 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number6 index5 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleInputEmail1"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control-label"</code><code
                                                            class="html plain">&gt;Email address&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number7 index6 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"email"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleInputEmail1"</code> <code
                                                            class="html color1">aria-describedby</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"emailHelp"</code> <code
                                                            class="html color1">placeholder</code><code
                                                            class="html plain">=</code><code class="html string">"Enter
                                                            email"</code><code class="html plain">&gt;</code></div>
                                                    <div class="line number8 index7 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">small</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"emailHelp"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-text text-muted"</code><code
                                                            class="html plain">&gt;We'll never share your email with
                                                            anyone else.&lt;/</code><code
                                                            class="html keyword">small</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number9 index8 alt2"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number10 index9 alt1">&nbsp;</div>
                                                    <div class="line number11 index10 alt2"><code class="html plain">/*
                                                            For Password */</code></div>
                                                    <div class="line number12 index11 alt1">&nbsp;</div>
                                                    <div class="line number13 index12 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number14 index13 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleInputPassword1"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control-label"</code><code
                                                            class="html plain">&gt;Password&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number15 index14 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"password"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleInputPassword1"</code> <code
                                                            class="html color1">placeholder</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"Password"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number16 index15 alt1"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number17 index16 alt2">&nbsp;</div>
                                                    <div class="line number18 index17 alt1"><code class="html plain">/*
                                                            For Dropdown */</code></div>
                                                    <div class="line number19 index18 alt2">&nbsp;</div>
                                                    <div class="line number20 index19 alt1"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number21 index20 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleSelect1"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control-label"</code><code
                                                            class="html plain">&gt;Example select&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number22 index21 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">select</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleSelect1"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number23 index22 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;1&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number24 index23 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;2&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number25 index24 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;3&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number26 index25 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;4&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number27 index26 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;5&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number28 index27 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">select</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number29 index28 alt2"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number30 index29 alt1">&nbsp;</div>
                                                    <div class="line number31 index30 alt2"><code class="html plain">/*
                                                            for multiple select */</code></div>
                                                    <div class="line number32 index31 alt1">&nbsp;</div>
                                                    <div class="line number33 index32 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number34 index33 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleSelect2"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control-label"</code><code
                                                            class="html plain">&gt;Example multiple
                                                            select&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number35 index34 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">select</code> <code
                                                            class="html plain">multiple </code><code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control multiple-select"</code>
                                                        <code class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleSelect2"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number36 index35 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;1&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number37 index36 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;2&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number38 index37 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;3&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number39 index38 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;4&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number40 index39 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;5&lt;/</code><code
                                                            class="html keyword">option</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number41 index40 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">select</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number42 index41 alt1"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number43 index42 alt2">&nbsp;</div>
                                                    <div class="line number44 index43 alt1"><code class="html plain">/*
                                                            for textarea */</code></div>
                                                    <div class="line number45 index44 alt2">&nbsp;</div>
                                                    <div class="line number46 index45 alt1"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number47 index46 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleTextarea"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control-label"</code><code
                                                            class="html plain">&gt;Example textarea&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number48 index47 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">textarea</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-control"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"exampleTextarea"</code> <code
                                                            class="html color1">rows</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"4"</code><code
                                                            class="html plain">&gt;&lt;/</code><code
                                                            class="html keyword">textarea</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number49 index48 alt2"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number50 index49 alt1">&nbsp;</div>
                                                    <div class="line number51 index50 alt2"><code class="html plain">/*
                                                            For Radio Button */</code></div>
                                                    <div class="line number52 index51 alt1">&nbsp;</div>
                                                    <div class="line number53 index52 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">fieldset</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-group"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number54 index53 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">/* Checked Radio Button*/</code></div>
                                                    <div class="line number55 index54 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number56 index55 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios1"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number57 index56 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"radio"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">name</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios1"</code> <code
                                                            class="html color1">valu6</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"option1"</code> <code
                                                            class="html plain">checked&gt;</code></div>
                                                    <div class="line number58 index57 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">Option one is this and that—be sure to
                                                            include why it's great</code></div>
                                                    <div class="line number59 index58 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number60 index59 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number61 index60 alt2">&nbsp;</div>
                                                    <div class="line number62 index61 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">/* Not Checked Radio Button*/</code>
                                                    </div>
                                                    <div class="line number63 index62 alt2">&nbsp;</div>
                                                    <div class="line number64 index63 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number65 index64 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios2"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number66 index65 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"radio"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">name</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios2"</code> <code
                                                            class="html color1">value</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"option2"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number67 index66 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">Option two can be something else and
                                                            selecting it will deselect option one</code></div>
                                                    <div class="line number68 index67 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number69 index68 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number70 index69 alt1">&nbsp;</div>
                                                    <div class="line number71 index70 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">/* Disable Radio Button */</code></div>
                                                    <div class="line number72 index71 alt1">&nbsp;</div>
                                                    <div class="line number73 index72 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check disabled"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number74 index73 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios3"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number75 index74 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"radio"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">name</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"optionsRadios3"</code> <code
                                                            class="html color1">value</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"option3"</code> <code
                                                            class="html plain">disabled&gt;</code></div>
                                                    <div class="line number76 index75 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">Option three is disabled</code></div>
                                                    <div class="line number77 index76 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number78 index77 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number79 index78 alt2"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">fieldset</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number80 index79 alt1">&nbsp;</div>
                                                    <div class="line number81 index80 alt2"><code class="html plain">/*
                                                            use for multiple checkbox */</code></div>
                                                    <div class="line number82 index81 alt1">&nbsp;</div>
                                                    <div class="line number83 index82 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number84 index83 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">for</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"chkme"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number85 index84 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"checkbox"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">id</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"chkme"</code><code
                                                            class="html plain">&gt;Check me out</code></div>
                                                    <div class="line number86 index85 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number87 index86 alt2"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number88 index87 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number89 index88 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number90 index89 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"checkbox"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number91 index90 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">Option one is this and that—be sure to
                                                            include why it's great</code></div>
                                                    <div class="line number92 index91 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number93 index92 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number94 index93 alt1">&nbsp;</div>
                                                    <div class="line number95 index94 alt2"><code class="html plain">/*
                                                            use for disable checkbox */</code></div>
                                                    <div class="line number96 index95 alt1">&nbsp;</div>
                                                    <div class="line number97 index96 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">div</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check disabled"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number98 index97 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">label</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-label"</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number99 index98 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">input</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"form-check-input"</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"checkbox"</code> <code
                                                            class="html plain">disabled&gt;</code></div>
                                                    <div class="line number100 index99 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">Option two is disabled</code></div>
                                                    <div class="line number101 index100 alt2"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">label</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number102 index101 alt1"><code
                                                            class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">div</code><code
                                                            class="html plain">&gt;</code></div>
                                                    <div class="line number103 index102 alt2"><code
                                                            class="html plain">&lt;</code><code
                                                            class="html keyword">button</code> <code
                                                            class="html color1">type</code><code
                                                            class="html plain">=</code><code
                                                            class="html string">"submit"</code> <code
                                                            class="html color1">class</code><code
                                                            class="html plain">=</code><code class="html string">"btn
                                                            btn-success waves-effect waves-light"</code><code
                                                            class="html plain">&gt;Submit</code></div>
                                                    <div class="line number104 index103 alt1"><code
                                                            class="html plain">&lt;/</code><code
                                                            class="html keyword">button</code><code
                                                            class="html plain">&gt;</code></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end of modal-body -->
                </div>
                <!-- end of modal-content -->
            </div>
            <!-- end of modal-dialog -->
        </div>
        <!-- end of modal -->

        <div class="card-block">
           
            <form method="post" action="{{route('update')}}" enctype="multipart/form-data">
                @csrf
                <label class="form-control-label">Profil şəkli</label><br>
                <img src="{{Auth::user()->psekil}}" alt="" style="width:100px;">
                    <input type="file" name="psekil">
                <div class="form-group">
                    <label class="form-control-label">Ad</label><br>
                    <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-control-label">Email adresi</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{Auth::user()->email}}">
                </div>
                <div class="form-group ">
                    <label for="example-tel-input" class="form-control-label">Telefon</label><br>
                    <input class="form-control" type="tel" name="telefon" value=" {{Auth::user()->telefon}}"
                        id="example-tel-input">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-control-label">Cari parol</label>
                    <input type="password" name="cari_parol" class="form-control" id="exampleInputPassword1" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-control-label">Yeni parol</label>
                    <input type="password" name="yeni_parol" class="form-control" id="exampleInputPassword1" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-control-label">Təkrar parol</label>
                    <input type="password" name="parol_t" class="form-control" id="exampleInputPassword1" value="">
                </div>
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Daxil edin</button>
            </form>
        </div>
    </div>
</div>

@endsection
