<?php

namespace Tests\Feature;

use App\Mail\ContactFormMail;
use Tests\TestCase;

class ContactRoutesTest extends TestCase
{
    public function test_contact_page_is_available(): void
    {
        $response = $this->get('/contact');

        $response->assertOk();
    }

    public function test_contact_submission_redirects_back_to_contact_page(): void
    {
        $response = $this->post('/contact/send', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'Hello from the test suite.',
        ]);

        $response->assertRedirect('/contact');
    }

    public function test_contact_page_shows_submitted_data_after_successful_submission(): void
    {
        $this->post('/contact/send', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'Hello from the test suite.',
        ]);

        $this->get('/contact')
            ->assertSee('Jane Doe')
            ->assertSee('jane@example.com')
            ->assertSee('Hello from the test suite.');
    }

    public function test_contact_mail_renders_submitted_data(): void
    {
        $mailable = new ContactFormMail([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'message' => 'Hello from the test suite.',
        ]);

        $html = $mailable->render();

        $this->assertStringContainsString('Jane Doe', $html);
        $this->assertStringContainsString('jane@example.com', $html);
        $this->assertStringContainsString('Hello from the test suite.', $html);
    }
}
