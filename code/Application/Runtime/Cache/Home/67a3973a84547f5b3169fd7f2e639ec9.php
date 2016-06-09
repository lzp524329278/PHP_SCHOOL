<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>商品列表页</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="men">
  <div class="container">
    <div class="col-md-3 sidebar">
      <div class="block block-layered-nav">
        <div class="block-title"> <strong><span>状态</span></strong> </div>
        <div class="block-content">
          <dl id="narrow-by-list">
            <dt class="odd">价格</dt>
            <dd class="odd">
              <ol>
                <li> <a href="#"><span class="price1">0,00</span> <span class="price1">元</span> - <span class="price1">0,00</span> <span class="price1">元</span></a> (4) </li>
                <li> <a href="#"><span class="price1">100,00</span> <span class="price1">元</span> - <span class="price1">199,99</span> <span class="price1">元</span></a> (4) </li>
                <li> <a href="#"><span class="price1">200,00</span> <span class="price1">元</span> - <span class="price1">299,99</span> <span class="price1">元</span></a> (1) </li>
                <li> <a href="#"><span class="price1">400,00</span> <span class="price1">元</span> - <span class="price1">499,99</span> <span class="price1">元</span></a> (1) </li>
                <li> <a href="#"><span class="price1">800,00</span> <span class="price1">元</span> and above</a> (1) </li>
              </ol>
            </dd>
            <dt class="even">品牌</dt>
            <dd class="even">
              <ol>
                <li> <a href="#">品牌1</a> (2) </li>
                <li> <a href="#">品牌2</a> (1) </li>
              </ol>
            </dd>
            <dt class="last odd">颜色</dt>
            <dd class="last odd">
              <ol>
                <li> 黑色                        (0) </li>
                <li> <a href="#">蓝色</a> (2) </li>
                <li> <a href="#">绿色</a> (1) </li>
              </ol>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="mens-toolbar">
        <div class="sort">
          <div class="sort-by">
            <label>排序</label>
            <select>
              <option value=""> 热度 </option>
              <option value=""> 价格 : 从高到低 </option>
              <option value=""> 价格 : 从低到高 </option>
            </select>
          </div>
        </div>
        <div class="pager">
          <div class="limiter visible-desktop">
            <label>显示</label>
            <select>
              <option value="" selected="selected"> 9 </option>
              <option value=""> 15 </option>
              <option value=""> 30 </option>
            </select>
            每页 </div>
          <ul class="dc_pagination dc_paginationA dc_paginationA06">
            <li><a href="#" class="previous">页码</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="span_2">
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic2.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic1.jpg" class="img-responsive" alt=""/>
         <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic3.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="clearfix"></div>
      </div>
      <div class="span_2">
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic4.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic5.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic6.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="clearfix"></div>
      </div>
      <div class="span_3">
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic7.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic8.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="col_1_of_single1 span_1_of_single1"> <a href="single.html"> <img src="images/pic9.jpg" class="img-responsive" alt=""/>
          <h3>商品名</h3>
          <p>简介</p>
          <h4>399元</h4>
          </a> </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>