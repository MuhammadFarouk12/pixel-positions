<x-layout>
	<x-page-heading>New Job</x-page-heading>
	<x-forms.form method="POST" action="/jobs">
		<x-forms.input label="Title" name="title" placeholder="CEO" />
		<x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
		<x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />
		<x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
		<x-forms.input label="Tags (comma separated)" name="tags" placeholder="MuhammadFarouk,WebDev,AI,DevOps" />

		<x-forms.divider></x-forms.divider>
		<x-forms.checkbox name="featured" label="Is it Featured?"/>
		<x-forms.select name="schedule" label="Choose Your Schedule">
			<option value="Full Time">Full Time</option>
			<option value="Part Time">Part Time</option>
		</x-forms.select>
		<x-forms.divider></x-forms.divider>
		<x-forms.button>Submit</x-forms.button>
	</x-forms.form>
</x-layout>