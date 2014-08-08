<?php 

use Ozziest\Mocker\Eloquent;

class TestCase extends Orchestra\Testbench\TestCase {

    /**
     * Get Service Providers 
     *
     * @return array
     */
	protected function getPackageProviders()
    {
        return array(
				'Ozziest\Sample\SampleServiceProvider'
        	);
    }

    /**
     * Get Aliasses 
     *
     * @return array
     */
	protected function getPackageAliases()
    {
        return array(
            'Sample' => 'Ozziest\Sample\Facades\Sample'
        );
    }

    /**
     * Sample Test With Eloquent Mock
     *
     * @test
     * @return null
     */
	public function sample()
	{
        $mock = new Eloquent();
        $mock = $mock->save(1, 123)
                     ->get();
        Sample::mock($mock);
        
		$this->assertTrue(Sample::getTrue());
	}

}
