<?php

use Illuminate\Http\Response;

/**
 * 
 */
class StatisticsControllerTest extends TestCase
{
	/**
     * For zero candidate
     * @return [type] [description]
     */
    public function testStatisticsPrintForZeroCandidateAndStatusOk()
    {
        $response = $this->call('GET', 'api/v1/statistics/print/bird/0');

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }   

    /**
     * For one candidate
     * @return [type] [description]
     */
    public function testStatisticsPrintForOneCandidateAndStatusOk()
    {
        $response = $this->call('GET', 'api/v1/statistics/print/bird/1');

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }

    /**
     * For more than one candidate
     * @return [type] [description]
     */
    public function testStatisticsPrintForMoreThanOneCandidateAndStatusOk()
    {
        $response = $this->call('GET', 'api/v1/statistics/print/bird/100');

        $this->assertEquals(Response::HTTP_OK, $response->status());
    }	
}
