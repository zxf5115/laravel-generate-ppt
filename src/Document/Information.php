<?php
namespace zxf5115\Laravel\Ppt\Document;

use PhpOffice\PhpPresentation\PhpPresentation;

/**
 * @author zhangxiaofei [<1326336909@qq.com>]
 * @dateTime 2024-05-15
 *
 * 文档说明信息操作类
 */
class Information
{
  /**
   * @author zhangxiaofei [<1326336909@qq.com>]
   * @dateTime 2024-05-15
   *
   * 设置PPT文档信息
   *
   */
  protected static function setDocumentInformation(PhpPresentation $document, Array $data = [])
  {
    $title = $data['title'] ?? 'My Ppt Title';
    $subject = $data['subject'] ?? 'My Ppt Subject';
    $description = $data['description'] ?? 'My Ppt Description';
    $keywords = $data['keywords'] ?? 'Office 2007';
    $category = $data['category'] ?? 'My Ppt Category';
    $creator = $data['creator'] ?? 'Zhang XiaoFei';
    $last_modified_by = $data['last_modified_by'] ?? 'Zhang XiaoFei';

    $document->getDocumentProperties()
             ->setTitle($title)
             ->setSubject($subject)
             ->setDescription($description)
             ->setKeywords($keywords)
             ->setCategory($category)
             ->setCreator($creator)
             ->setLastModifiedBy($last_modified_by);
  }
}
