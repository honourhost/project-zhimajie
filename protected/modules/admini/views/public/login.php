<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>芝麻街登录 </title>


<link rel="stylesheet" type="text/css" href="<?php echo $this->_baseUrl?>/static/admin/css/login-style.css" />
<script type="text/javascript" language="javascript">
    //<![CDATA[
    // show login form in top frame
    if (top != self) {
        window.top.location.href = location;
    }
    //]]>
</script>
</head>
<body>

<div style="margin-left:30% ; margin-top: 2%"><img src="/static/admin/images/bj-logo.jpg"></div>
<div id="login">
  <div class="wrapper">
    <div class="alert error" >&nbsp;</div>
   <!-- <div class="logo">  </div>-->
    <div class="form">
      <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-wrap',
	'enableAjaxValidation'=>true,
)); ?>
      <dl>
        <dt>用户名</dt>
        <dd> <?php echo $form->textField($model,'username', array('class'=>'input-password')); ?> <?php echo $form->error($model,'username'); ?> </dd>
        <dt>密&nbsp;&nbsp;&nbsp;&nbsp;码</dt>
        <dd> <?php echo $form->passwordField($model,'password', array('class'=>'input-password')); ?> <?php echo $form->error($model,'password'); ?> </dd>

        <dd>
          <input type="submit" name="login" class="input-login" value=""/>
          <input type="reset" name="login" class="input-reset" value=""/>
        </dd>
      </dl>
      <?php $this->endWidget(); ?>
    </div>
    <br class="clear-fix"/>

  </div>
</div>
</body>
</html>