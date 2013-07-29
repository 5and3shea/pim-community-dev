<?php

namespace Pim\Bundle\BatchBundle\Job;

/**
 * Common interface for Job repositories which should handle how job are stored, updated
 * and retrieved
 *
 * Inspired by Spring Batch org.springframework.batch.core.repository.JobRepository;
 *
 * @author    Benoit Jacquemont <benoit@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */
interface JobRepostoryInterface
{
    /**
     * Create a JobExecution object
     * @param string        $jobName       Name of the job
     * @param JobParameters $jobParameters Parameters for the execution of the job
     *
     * @return JobExecution
     */
    public function createJobExecution($jobName, JobParameters $jobParameters);

    /**
     * Update a JobExecution object
     *
     * @param JobExecution
     */
    public function updateJobExecution($jobExecution);

    /**
     * Update a StepExecution object
     *
     * @return StepExecution
     */
    public function updateStepExecution($stepExecution);
}
