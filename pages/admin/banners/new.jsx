/**
 * @share [id]/edit
 */
import { CListBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { Form, FormAction, FormItem } from '@mxjs/a-form';
import { FormItemUpload, FormItemSort, Select } from '@miaoxing/admin';
import DateRangePicker from '@mxjs/a-date-range-picker';
import LinkPicker from '@miaoxing/link-to/components/LinkPicker';
import { Section } from '@mxjs/a-section';

const New = () => {
  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        <Section>
          <FormItem label="所属分类" name="categoryId" required>
            <Select url="banner-categories" labelKey="name" valueKey="id" firstLabel="请选择" firstValue=""/>
          </FormItem>

          <FormItemUpload label="图片" name="image" required max={1}/>

          <FormItem label="标题" name="title"/>

          <FormItem label="跳转地址" name="link">
            <LinkPicker/>
          </FormItem>

          <FormItem label="显示时间" name="_startAt">
            <DateRangePicker showTime names={['startAt', 'endAt']}/>
          </FormItem>

          <FormItemSort/>
        </Section>

        <FormAction/>
      </Form>
    </Page>
  );
};

export default New;
