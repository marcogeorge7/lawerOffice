<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Document_GoogleCloudDocumentaiV1beta3DocumentTextAnchor extends Google_Collection
{
  protected $collection_key = 'textSegments';
  public $content;
  protected $textSegmentsType = 'Google_Service_Document_GoogleCloudDocumentaiV1beta3DocumentTextAnchorTextSegment';
  protected $textSegmentsDataType = 'array';

  public function setContent($content)
  {
    $this->content = $content;
  }
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param Google_Service_Document_GoogleCloudDocumentaiV1beta3DocumentTextAnchorTextSegment
   */
  public function setTextSegments($textSegments)
  {
    $this->textSegments = $textSegments;
  }
  /**
   * @return Google_Service_Document_GoogleCloudDocumentaiV1beta3DocumentTextAnchorTextSegment
   */
  public function getTextSegments()
  {
    return $this->textSegments;
  }
}