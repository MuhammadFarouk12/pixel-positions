<x-layout>
	<x-page-heading>Register</x-page-heading>
	<x-forms.form class="form" method="POST" action="/register" enctype="multipart/form-data">
		<x-forms.input class="" name="name" label="Your Name"/>
		<x-forms.input class="" name="email" label="Email" type="email"/>
		<x-forms.input class="" name="password" label="Password" type="password"/>
		<x-forms.input class="" name="password_confirmation" label="Password Confirmation" type="password"/>

		<x-forms.divider/>

		<x-forms.input class="" name="employer" label="Employer Name"/>
		<x-forms.input class="" name="logo" label="Employer Logo" type="file"/>

		<x-forms.divider/>

		<x-forms.button class="button">Create Account</x-forms.button>
	</x-forms.form>
</x-layout>