<?php

class _UnitTestForCreateOrUpdate extends TestCase
{
    private $acting_user_email = 'user@test.com';
    private $test_account_id = '1';

    public function testCreateOrUpdate()
    {
        $url = 'URL function that need to test';
        $input = [];
        $input['due_time'] = '2020-01-02';
        $input['created_at'] = '2022-01-02';
        $input['consumer_type'] = 'IDK the value';
        $input['customer_type'] = 'IDK the value';
        $input['username'] = 'IDK the value';
        $input['post_code'] = 'IDK the value';
        $input['address'] = 'IDK the value';
        $input['city'] = 'IDK the value';
        $input['town'] = 'IDK the value';
        $input['country'] = 'IDK the value';
        $input['reference'] = 'IDK the value';
        $input['time_to_pay'] = 'IDK the value';
        $input['charge_ob'] = 'IDK the value';
        $input['customer_id'] = 'IDK the value';
        $input['charge_km'] = 'IDK the value';
        $input['maximum_km'] = 'IDK the value';

        $actingUser = User::where('email', '=', $this->acting_user_email)->firstOrFail();
        $response = $this->actingAs($actingUser)
            ->json('POST', $url, $input);

        $response = json_decode($response->getContent(), true);
        $this->assertTrue($response == false, "Test case failed");

    }
}