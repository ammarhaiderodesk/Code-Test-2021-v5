<?php

class _UnitTest extends TestCase
{
    private $acting_user_email = 'user@test.com';
    private $test_account_id = '1';

    public function testWillExpireAt()
    {
        $url = 'URL function that need to test';
        $input = [];
        $input['due_time'] = '2020-01-02';
        $input['created_at'] = '2022-01-02';
        $actingUser = User::where('email', '=', $this->acting_user_email)->firstOrFail();
        $response = $this->actingAs($actingUser)
            ->json('POST', $url, $input);

        $response = json_decode($response->getContent(), true);

        //I donot know what to test here what to assert here

    }
}