export class Hiking {
  constructor(
    public organiserName: string,
	public organiserPhone: string,
    public name: string,
	public duration: number,
    public elevation: string,
    public level: string,
	public date: string,
	public location: string,
	public link: string,
    public latitude: string,
    public longitude: string,
    public numberOfPeople: number,
    public additionalInfo?: string
  ) {  }
}