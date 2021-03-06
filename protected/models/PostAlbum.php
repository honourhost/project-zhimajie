<?php

/**
 * "{{post_album}}" 数据表模型类.
 *
 * @package .Model
 */
class PostAlbum extends XBaseModel
{

    /**
     * @return string 相关的数据库表的名称
     */
    public function tableName()
    {
        return '{{post_album}}';
    }

    /**
     * @return array 对模型的属性验证规则.
     */
    public function rules()
    {
        return array(
            array('catalog, folder, sort_order', 'numerical', 'integerOnly' => true),
            array('user_id, content_id, file_size, down_count, create_time', 'length', 'max' => 10),
            array('real_name, thumb_name, access', 'length', 'max' => 255),
            array('file_name, save_path, save_name', 'length', 'max' => 100),
            array('hash', 'length', 'max' => 32),
            array('file_ext', 'length', 'max' => 5),
            array('file_mime', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, user_id, content_id, catalog, folder, real_name, file_name, thumb_name, save_path, save_name, hash, file_ext, file_mime, file_size, down_count, access, sort_order, create_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array 关联规则.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array 自定义属性标签 (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_id' => '用户名',
            'content_id' => '内容编号',
            'catalog' => '类别',
            'folder' => '文件夹',
            'real_name' => '原始文件名称',
            'file_name' => '带路径文件名',
            'thumb_name' => '缩略图',
            'save_path' => '保存路径',
            'save_name' => '保存文件名不带路径',
            'hash' => 'hash',
            'file_ext' => '扩展名称',
            'file_mime' => '文件头信息',
            'file_size' => '文件大小',
            'down_count' => '下载次数',
            'access' => '权限控制',
            'sort_order' => '排序',
            'create_time' => '上传时间',
        );
    }


    /**
     * 返回指定的AR类的静态模型.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PostAlbum the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


}
