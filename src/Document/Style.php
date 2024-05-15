<?php
namespace zxf5115\Laravel\Ppt\Document;

use PhpOffice\PhpPresentation\DocumentLayout;
use PhpOffice\PhpPresentation\PhpPresentation;

/**
 * @author zhangxiaofei [<1326336909@qq.com>]
 * @dateTime 2024-05-15
 *
 * 文档样式操作类
 */
class Sytle
{
  /**
   * @author zhangxiaofei [<1326336909@qq.com>]
   * @dateTime 2024-05-15
   *
   * 设置PPT文档样式
   *
   * @param PhpPresentation $document 文档操作对象
   * @param string $type 文档显示比例
   */
  protected static function setDocumentLayout(PhpPresentation $document, $type = '')
  {
    $layout = new DocumentLayout();

    switch($type)
    {
      case 1:
        $ratio = DocumentLayout::LAYOUT_SCREEN_4X3;
        break;
      case 2:
        $ratio = DocumentLayout::LAYOUT_SCREEN_16X10;
        break;
      default:
        $ratio = DocumentLayout::LAYOUT_SCREEN_16X9;
    }

    // 文档显示比例16*9
    $layout->setDocumentLayout($ratio);

    // 设置PPT文档样式
    $document->setLayout($layout);
  }
}
