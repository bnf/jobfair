<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Dan\Jobfair\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The model for Application
 *
 * @author Dan <typo3dev@outlook.com>
 */
class Application extends AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * message
     *
     * @var string
     */
    protected $message = '';

    /**
      * attachment
      *
      * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
      */
    protected $attachment;

    /**
       * jobs
       *
       * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dan\Jobfair\Domain\Model\Job>
       */
    protected $jobs;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     */
    protected function initStorageObjects()
    {
        $this->jobs = new ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
       * Returns the message
       *
       * @return string $message
       */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
       * Returns the attachment
       *
       * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $attachment
       */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets the attachment
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
    }

    /**
     * Adds a Job
     *
     * @param \Dan\Jobfair\Domain\Model\Job $job
     */
    public function addJob(Job $job)
    {
        $this->jobs->attach($job);
    }

    /**
     * Removes a Job
     *
     * @param \Dan\Jobfair\Domain\Model\Job $jobToRemove The Job to be removed
     */
    public function removeJob(Job $jobToRemove)
    {
        $this->jobs->detach($jobToRemove);
    }

    /**
     * Returns the jobs
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dan\Jobfair\Domain\Model\Job> $jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Sets the jobs
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dan\Jobfair\Domain\Model\Job> $jobs
     */
    public function setJobs(ObjectStorage $jobs)
    {
        $this->jobs = $jobs;
    }
}
