<?php
namespace Zxf5115\Laravel\Ppt;

use PhpOffice\PhpPresentation\IOFactory;
use PhpOffice\PhpPresentation\Style\Fill;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Shape\Drawing;
use PhpOffice\PhpPresentation\DocumentLayout;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Slide\Background\Image;

use Zxf5115\Laravel\Ppt\Document\Style;
use Zxf5115\Laravel\Ppt\Document\Content;
use Zxf5115\Laravel\Ppt\Document\Information;

/**
 * @author zhangxiaofei [<1326336909@qq.com>]
 * @dateTime 2024-05-15
 *
 * 核心类
 */
class Ppt
{
  protected static $instance = null;

  /**
   * @author zhangxiaofei [<1326336909@qq.com>]
   * @dateTime 2024-05-15
   *
   * 创建单例对象
   *
   * @return [type]
   */
  public static function getInstance()
  {
    // 判断$instance是否是PhpPresentation对象，不是则创建
    if(!self::$instance instanceof PhpPresentation)
    {
      self::$instance = new PhpPresentation();
    }

    return self::$instance;
  }


  /**
   * @author zhangxiaofei [<1326336909@qq.com>]
   * @dateTime 2024-05-15
   *
   * 生成Ppt文件
   *
   * @param string $file 文件
   * @param string $path 路径
   * @param string $allow 允许上传的后缀
   * @param string $is_filename 是否返回文件名
   * @return [type]
   */
  public static function generate()
  {
    try
    {
      $document = self::getInstance();

      // 设置PPT文档样式
      Sytle::setSytle($document);

      // 设置文档说明信息
      Information::setInformation($document);

      // 删除空白第一页
      $document->removeSlideByIndex(0);

      return true;
    }
    catch(\Exception $e)
    {
      // 记录异常信息
      record($e);

      return false;
    }
  }
}
